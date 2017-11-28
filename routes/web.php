<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
      $allPosts = \App\Post::all();
       dd($allPosts);
      $featuredPosts= \App\Post::where('is_feature',1)->get();
       dd($featuredPosts);
});
