<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    public static function getAll()
    {
        return [
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
    }

    public static function getSingle($slug)
    {
        $post = static::getAll();
        return Arr::first($post, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
    }
}
