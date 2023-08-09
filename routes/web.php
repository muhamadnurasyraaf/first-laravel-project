<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignUpController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

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
Route::get('/signup',[SignUpController::class,'index'])->middleware('guest');
Route::post('/signup',[SignUpController::class,'store']);


Route::get('/post',[PostController::class,'index']);

Route::get('/post/{id}',[PostController::class,'show']);

Route::get('/hello',function(){
    return response('<h1>Hello World</h1>',404);
});

Route::get('/posts/{id}',function($id){
    dd($id);
    return response('Post ' . $id);
})->where('id','[0-9]+');

Route::get('/search',function(Request $req){
    return $req->name . ' ' . $req->city;
});

Route::get('/login',[LoginController::class,'index'])->middleware('guest');

Route::post('/login',[LoginController::class,'store']);

Route::get('/category/{id}',[CategoryController::class,'show']);

Route::get('/user/{id}',[UserController::class,'showPost']);

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/profile',[ProfileController::class,'index'])->middleware('auth');

Route::post('/logout',[LoginController::class,'logout']);