<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\UserLoginRequest;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function login(UserLoginRequest $request){
        $validated = $request->validated();
        if(!Auth::attempt($validated)){
            return response()->json([
                "attempt"=>"false",
                "message"=>"Invalid Login Data"
            ]);
        };
        $user = \App\Models\User::where('email',$validated['email'])->first();
        $role = $user->role;
        return response()->json([
            "attempt" => true,
            "access_token" => $user->createToken('api_token')->plainTextToken,
            'token_type'=>'Bearer',
            'role'=>$role['name'],
        ]);
    }
}
