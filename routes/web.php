<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title'=> 'Blog', 'posts' => [
        [
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rama Jiansyah',
            'date' => '1 Januari 2024',
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quidem minus. Consequatur ipsa veniam asperiores error inventore excepturi vero dolores. Molestias corrupti consequatur, natus dolore aliquid sed odio sapiente unde!"
        ],
        [
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rama Jiansyah',
            'date' => '1 Februari 2024',
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quidem minus. Consequatur ipsa veniam asperiores error inventore excepturi vero dolores. Molestias corrupti consequatur, natus dolore aliquid sed odio sapiente unde!"
        ]
    ]]);
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
   $posts = [
    [
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Rama Jiansyah',
        'date' => '1 Januari 2024',
        'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quidem minus. Consequatur ipsa veniam asperiores error inventore excepturi vero dolores. Molestias corrupti consequatur, natus dolore aliquid sed odio sapiente unde!"
    ],
    [
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Rama Jiansyah',
        'date' => '1 Februari 2024',
        'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quidem minus. Consequatur ipsa veniam asperiores error inventore excepturi vero dolores. Molestias corrupti consequatur, natus dolore aliquid sed odio sapiente unde!"
    ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});