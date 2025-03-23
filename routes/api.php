<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTokenController;

Route::middleware(['auth.token', 'throttle:token'])->get('/test', function () {
    return response()->json(['message' => 'ok']);
});

// routes/api.php
Route::post('/token', [ApiTokenController::class, 'store']); // トークン発行用

