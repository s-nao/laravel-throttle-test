<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ApiToken;

class TokenController extends Controller
{
    /**
     * 発行済みトークンの一覧を返す
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $tokens = ApiToken::all();

        return response()->json($tokens);
    }
}