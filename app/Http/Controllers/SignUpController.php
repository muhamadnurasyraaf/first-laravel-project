<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index(){
        return view('signup.index',[
            'title' => 'Sign Up',
        ]);
    }

    public function store(Request $req){
        $validatedData = $req->validate([
            'username' => ['required','unique:users'],
            'email' => ['required','email:dns','min:3','max:255','unique:users'],
            'password' => ['required','min:5','max:15'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $req->session()->flash('success','Registration Successful! Please login');

        return redirect('/login');
    }
}
