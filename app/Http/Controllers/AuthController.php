<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $user = User::create($input);

        $data = [
            'message' => 'User is created successfully',
            'data' => $user
        ];

        return response()->json($data, 201);
    }
    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'string|required'
        ]);

        if (Auth::attempt($input)) {
            $token = Auth::user()->createToken('auth_token');

            $data = [
                'message' => 'User is logged in successfully',
                'token' => $token->plainTextToken
            ];

            return response()->json($data, 200);
        } else{
            $data= [
                'message' => 'Email or password is incorrect',
            ];

            return response()->json($data, 401);
        }
    }
}
