<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['throttle:token'])->get('/test', function () {
    return response()->json(['message' => 'token ok']);
});

