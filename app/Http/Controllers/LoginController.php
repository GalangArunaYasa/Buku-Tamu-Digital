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

    function dashboard(){
        return view('dashboard');
    }

    function submitLogin(Request $request ){
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
            return redirect()->route('dashboard');

        }else{
            return redirect()->route('login')
            ->with('gagal_login', 'Email/Password tidak benar');
        };

    }

    function register(){
        return view('register');
    }

    function submitRegister(Request $request ){

        $cek_user = User::where('email',$request -> email)->first();
        if ($cek_user) {
             return redirect()->back()->with('gagal', 'Email Sudah terdaftar');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = ($request->password);
        $user->save();

        return redirect('/login');
    }
}
