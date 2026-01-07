<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about',  ['title' => 'About Page']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
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
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page', 'name' => "Alhie Fikri"]);
});
