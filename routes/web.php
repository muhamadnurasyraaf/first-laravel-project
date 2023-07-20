<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
        'username' => 'Adam Harith',
    ]);
});
Route::get('/about',function(){
    return view('about',[
        'title' => 'About',
        'name' => 'Muhamad Nur Asyraaf',
        'email' => 'masyraaf14@gmail.com',
        'image' => 'kfc-2-226243.webp'
    ]);
});

  


Route::get('/post',function(){
    $blog_post =[
       
    ];
    return view('/posts',[
        'title' => 'Blog',
        'posts' => Post::all(),
    ]);
});

Route::get('/post/{slug}',function($slug){

    
    
    

    return view('post',[
        'title' => 'Post',
        'post' => Post::find($slug),
    ]);
});

