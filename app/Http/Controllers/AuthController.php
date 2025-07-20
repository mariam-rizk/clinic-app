<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\registerFormRequest;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function submitRegister(registerFormRequest $request){
        $data = $request->validated();
        User::create($data);
        return redirect()->route('login')->with("success", "Account created successfuly ");
    }

    public function login(){
        return view('auth.login');
    }

    public function submitLogin(){
        
    }
}
