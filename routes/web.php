<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']);
});
Route::get('/about', function () {
    return view('about',  ['title'=> 'About Page']);
});


// Buat 2 rute baru
//  1. /blog
//  2 buah artikel, judul dan isi
// 2. /contact
// email /social media

Route::get('/blog', function () {
    return view('blog', ['title'=> 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact Page']);
});