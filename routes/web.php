<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ['nama'=> 'Alhie']);
});


// Buat 2 rute baru
//  1. /blog
//  2 buah artikel, judul dan isi
// 2. /contact
// email /social media

Route::get('/blog', function () {
    return view('blog', ['title1'=> 'Judul Blog 1','description1'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, quibusdam?'], ['title2'=> 'Judul Blog 2', 'description2'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias illo dicta quasi fugit minus veritatis reiciendis, veniam dolor esse tenetur!'] );
});

Route::get('/contact', function () {
    return view('contact', ['email'=> 'Alhie@example.com', 'socialmedia'=> 'Alhiefikri']);
});