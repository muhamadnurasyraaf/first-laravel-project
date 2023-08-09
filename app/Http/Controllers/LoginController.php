<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login',
        ]);
    }


    public function store(Request $request){
        $credentials = $request->validate([
            'username' => ['required','string'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','login failed!');
    }

    public function logout(Request $req){
        $req->session()->invalidate();
        $req->session()->regenerate();

        return redirect('/');
    }
}
