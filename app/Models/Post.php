<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Alhie Fikri',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error deleniti minus architecto nihil cumque optio, laboriosam, officiis tenetur necessitatibus nemo porro deserunt non. Quidem nihil aliquam tempore reiciendis perferendis.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Alhie Fikri',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error deleniti minus architecto nihil cumque optio, laboriosam, officiis tenetur necessitatibus nemo porro deserunt non. Quidem nihil aliquam tempore reiciendis perferendis.',
            ],
            [
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Alhie Fikri',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit ullam libero beatae magni ea quo dicta, iusto, sapiente temporibus, reiciendis fugiat omnis eligendi. Omnis reiciendis magni non dolorem ut nostrum!',
            ]
        ];
    }

    public static function find($slug): array
    {
        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
