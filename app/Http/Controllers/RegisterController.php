<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
class RegisterController extends Controller
{
    //
    public function register(Request $request) 
    {
        $validate_email = Validator::make($request->all(), [
            'email' => 'required|email|unique:users'
        ]);
        if ($validate_email->fails()) {
            return response()->json([
                'message' => 'Email already taken'
            ], 400);    

        }
        
        $user = User::create([          //create user
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return response()->json([       // if user is newly created, return "User successfully registered" with 201
            'message' => 'User successfully registered'
        ], 201);

    }
}
