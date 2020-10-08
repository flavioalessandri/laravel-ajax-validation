<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
      return view('posts.index');
    }

    public function create(){
      return view('posts.create');
    }

    public function store(Request $request){
      $data = $request->
              validate(
                [
              "title" => 'required|min:10|max:60',
              "genre"=> 'required|min:6|max:30',
                "body" => 'required',
                "like" => 'required|min:0|max:900',
                'dislike' => 'required|min:0|max:900'

                                        ]);
      $post = Post::create($data);
      return redirect() -> route('posts.index');
    }

    public function show($id){

      $post = Post::findOrFail($id);

      return view('posts.show', compact('post'));
    }



}
