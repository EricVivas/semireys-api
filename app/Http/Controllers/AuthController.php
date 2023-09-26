<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\JWT\JWTUtils;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::with(["role", "sales"])->where("email", $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $data_token['email'] = $user->email;
            $data_token['expiration'] = time() + (60 * 60 * 24 * 7);
            return response()->json(['data' => ['user' => $user, 'token' => JWTUtils::generateToken($data_token)]]);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 400);
        }
    }
}