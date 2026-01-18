<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


Route::get('/', function () {
    $title = 'Home Page';
    $Welcome = 'Hello This is Home Page';
    return view('home',compact('title','Welcome'));
}) -> name('home');

Route::get('/posts', function(){
    $posts = Post::latest()->Filter(request(['keyword','category','author']))->paginate(5)->withQueryString();
    return view('posts',['title' => 'Blogs Page','posts' => $posts]);}) -> name('blog');
    
Route::get('/posts/{post:slug}', function(Post $post){
   return view('post',['title' => 'Single Post','post' => $post]);
});

Route::get('/about', function(){
    return view('about',['title' =>'About Page']);}) -> name('about');

Route::get('/contact', function(){
    return view('contact',['title' => 'Contact']);}) -> name('contact');