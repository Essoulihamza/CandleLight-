<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    use HttpResponse;
    public function Login(LoginUserRequest $request)
    {
        $request->validated($request->all());

        if(!Auth::attempt(['email'=> $request->email, 'password'=> $request->password]) ) {
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('email' , $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('Api Token of ' . $user->name)->plainTextToken
        ]); 
        
    }

    public function SignUp(StoreUserRequest $request) {
        $request->validated($request->all());
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'birth_date' => $request->birth_date,
            'image' => $request->image,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]); 

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of ' . $user->first_name)->plainTextToken
        ]);
    }
    public function Logout() {
        Auth::user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'You have successfully been logged out and your token has been deleted',
        ]);
    }
}
