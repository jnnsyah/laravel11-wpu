<?php

use App\Models\Posts;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About']);
});

Route::get('/blog', function () {
    return view('blog', data: ['title'=> 'Blog', 'posts' => posts::getAll()]);
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
Route::get('/posts/{slug}', function ($slug) {
    $post = posts::getSingle($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});