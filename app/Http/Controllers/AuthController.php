<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\JWT\JWTUtils;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where($request->all())->first();
        if ($user) {
            return response()->json(['data' => JWTUtils::generateToken($user)]);
        } else {
            return response()->json(['error' => 'invalid credentials'], 400);
        }
    }
}
