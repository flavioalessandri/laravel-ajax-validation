<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/post/create', 'PostController@create')->name('post.create');

Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

Route::post('/post/store', 'PostController@store')->name('post.store');



Route::get('/api/posts/all', 'PostApiController@getAllPosts')-> name('posts.api.all');

Route::get('/api/posts/best', 'PostApiController@getBestPosts')-> name('posts.api.best');
