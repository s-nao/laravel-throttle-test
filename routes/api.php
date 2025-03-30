<?php

use Illuminate\Support\Facades\Route;

// APIルート定義
Route::middleware(['auth.token', 'api.throttle'])->group(function () {
    Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);
});

// トークン発行用
Route::post('/token', [App\Http\Controllers\ApiTokenController::class, 'store']);


// Admin用ルート定義
Route::prefix('admin')->group(function () {
    Route::get('/tokens', [\App\Http\Controllers\Admin\TokenController::class, 'index']);
});