<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

route::delete('/posts/{id}' , [PostController::class , 'destroy'])->name('posts.destroy');
route::GET('/posts/{id}' , [PostController::class , 'show'])->name('posts.show');
route::POST('/posts' , [PostController::class , 'store'])->name('posts.store');
route::GET('/posts/create' , [PostController::class , 'create'])->name('posts.create');
route::GET('/posts' , [PostController::class , 'index'])->name('posts.index');

Route::get('/', function () {
    return view('welcome');
});
