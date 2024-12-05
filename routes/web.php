<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About']);
});

Route::get('/blog', function () {
    return view('blog', data: ['title'=> 'Blog', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', [    
        'title'=> 'Contact',
        'nama' => 'Rama Jiansyah',
        'email' => 'jiansyah1248@gmail.com',
        'ig' => '@jnnsyh'
    ]);
});

//wildcard -> menangkap apapun yang ada di url 
Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});