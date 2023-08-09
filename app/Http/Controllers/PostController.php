<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class PostController extends Controller
{
    public function index(){

        $posts = Post::latest()->filter(request(['search']))->paginate(5);
        return view('/posts',[
            'title' => 'Blog',
            'posts' => $posts,
            'count' => $posts->total(),
        ]);
    }
    
    public function show($id){
        return view('/post',[
            'title' => 'single post',
            'post' => Post::find($id),
        ]);
    }

}
