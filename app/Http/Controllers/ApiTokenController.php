<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ApiToken;

class ApiTokenController extends Controller
{
    public function store(Request $request)
    {
        $token = Str::random(32);
        $apiToken = ApiToken::create([
            'name' => $request->input('name', 'default'),
            'token' => $token,
        ]);

        return response()->json(['token' => $apiToken->token]);
    }
}
