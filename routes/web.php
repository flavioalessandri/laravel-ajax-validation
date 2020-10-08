<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/post/create', 'PostController@create')->name('post.create');



Route::get('/api/posts/all', 'PostApiController@getAllPosts')-> name('posts.api.all');

Route::get('/api/posts/best', 'PostApiController@getBestPosts')-> name('posts.api.best');
