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
            $data_token['email'] = $user->email;
            $data_token['expiration'] = time() + (60 * 60 * 24 * 7);
            return response()->json(['data' => JWTUtils::generateToken($data_token)]);
        } else {
            return response()->json(['error' => 'invalid credentials'], 400);
        }
    }
}
