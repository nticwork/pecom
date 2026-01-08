<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello from vercel</h1>');
});


Route::get('/hello1', function () {
    return view('hello');
});
