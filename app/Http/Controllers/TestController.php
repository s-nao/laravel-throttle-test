<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    /**
     * 単純に "ok" を返すメソッド
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(['message' => 'ok']);
    }
}