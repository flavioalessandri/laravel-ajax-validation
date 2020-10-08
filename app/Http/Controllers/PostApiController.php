<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostApiController extends Controller
{
    public function getAllPosts(){

      $posts = Post::all();
      return response() -> json($posts);
    }

    public function getBestPosts(){

      $posts = Post::where('like', '>', 200) -> get();
      return response() -> json($posts);
    }

    // public function getBestPosts(){
    //
    //   $posts = Post::where('like', '>', 200) -> get();
    //   return response() -> json($posts);
    // }


}
