<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function Login(){
        return "this is my login method";
    }

    public function SignUp(StoreUserRequest $request) {
        $request->validated($request->all());
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]); 

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of ' . $user->first_name)->plainTextToken
        ]);
    }
    public function Logout() {
        return response()->json('this is Logout');
    }
}
