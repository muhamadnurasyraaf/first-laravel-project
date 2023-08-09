<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showPost($id){
        $user = User::find($id);
        $post = $user->post;
        return view('/userpost',[
            'title' => 'Posts by ' . $user->name,
            'posts' => $post,
        ]);
    }
}
