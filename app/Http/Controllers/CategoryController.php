<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function show($id){
        $category = Category::findOrFail($id);
        $posts = $category->post;

        return view('category',[
            'title' => 'Post based on ' . $category->name,
            'posts' => $posts, 
        ]);
   }
}
