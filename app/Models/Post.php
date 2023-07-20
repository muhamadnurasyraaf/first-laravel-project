<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [
    [
        'title' => 'Title first post',
        'slug' => 'first-title',
        'author' => 'Asyraaf',
        'body' => 'Lorem ipsum dolor sit amet consectetur'
    ],
    [
        'title' => 'Title second post',
        'slug' => 'second-title',
        'author' => 'Asyraaf',
        'body' => 'Lorem ipsum dolor sit amet consectetur'
    ],
    [
        'title' => 'Title third post',
        'slug' => 'third-title',
        'author' => 'ChatGpt',
        'body' => 'In the above code, we create a std::vector<int> named numbers. Initially, it is an empty vector with no elements. Using the push_back() function, we add elements to the vector. The push_back() function automatically resizes the vector to accommodate the new elements.
        The size() function returns the current number of elements in the vector. In this example, the output is 3 since we added three elements.
        To access elements in the vector, you can use the subscript operator [] with an index. The example demonstrates how to iterate over the vector using a for loop and print its contents.
        One of the advantages of using std::vector is that it automatically handles memory allocation and resizing for you. As you add or remove elements, the vectors capacity adjusts dynamically. You can also use various member functions provided by std::vector, such as push_back(), pop_back(), insert(), erase(), and many more, to manipulate and resize the array as needed'
    ],
   ];

   public static function find($slug){
        $posts = self::$blog_posts;
        $aimpost = [];
        foreach($posts as $post){
            if($post['slug'] === $slug){
                $aimpost = $post;
            }
        }
        return $aimpost;
   }

   public static function all(){
    return self::$blog_posts;
   }
}
