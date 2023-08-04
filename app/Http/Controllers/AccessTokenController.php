<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessTokenController extends Controller
{

    // For user login
    public function login(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $accessToken = $user->createToken('MyApp')->accessToken;

            return response()->json(['access_token' => $accessToken], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}