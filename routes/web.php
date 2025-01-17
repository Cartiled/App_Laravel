<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PostController;

Route::controller(PostController::class)->group(function () {
Route::get('/posts', 'index')->name('posts.index');
Route::get('/posts/{post}', 'show')->name('posts.show');
});

