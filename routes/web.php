<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'Rama Jiansyah',
        'email' => 'jiansyah1248@gmail.com',
        'ig' => '@jnnsyh'
    ]);
});