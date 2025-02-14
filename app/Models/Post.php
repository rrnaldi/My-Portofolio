<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
return [
    [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Renaldi',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam harum aperiam deleniti sit voluptatem, totam, blanditiis minima, nostrum molestias itaque deserunt minus quaerat non porro dolore? Doloribus commodi possimus vero nemo eius ipsam deserunt? Sunt aliquid exercitationem quam dolore eos temporibus harum cupiditate, labore in nostrum nobis velit libero corrupti?'
    ],
    [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Renaldi',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam harum aperiam deleniti sit voluptatem, totam, blanditiis minima, nostrum molestias itaque deserunt minus quaerat non porro dolore? Doloribus commodi possimus vero nemo eius ipsam deserunt? Sunt aliquid exercitationem quam dolore eos temporibus harum cupiditate, labore in nostrum nobis velit libero corrupti?'
    ]
    ];
    }

    public static function find($slug) {
        return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
