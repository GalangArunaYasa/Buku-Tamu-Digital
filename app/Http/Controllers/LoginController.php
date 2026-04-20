<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function submitLogin(Request $request ){
        $data = $request->only('email','password');

        if (Auth::attempt($data)){
            return "Hore bisa Login";
        }

        return "gaboleh, email/password";
    }

    function register(){
        return view('register');
    }

    function submitRegister(Request $request ){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = ($request->password);
        $user->save();

        return redirect('/login');
    }
}
