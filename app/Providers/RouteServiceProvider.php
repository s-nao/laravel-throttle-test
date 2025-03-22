<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Throttle定義
        RateLimiter::for('token', function (Request $request) {
            $token = $request->bearerToken() ?? $request->ip();
            $key = $token;
        
            $limit = Limit::perMinute(10)->by($key);
        
            return $limit;
        });

        // ルート読み込み（API用）
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
    }
}
