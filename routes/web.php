<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
route::post('/posts/search' , [PostController::class, 'search'])->name('posts.search');
route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
route::delete('/posts/{id}' , [PostController::class , 'destroy'])->name('posts.destroy');
route::POST('/posts/{id}' , [PostController::class , 'show'])->name('posts.show');
route::POST('/posts' , [PostController::class , 'store'])->name('posts.store');
route::GET('/Posts/create' , [PostController::class , 'create'])->name('posts.create');
route::GET('/posts' , [PostController::class , 'index'])->name('posts.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
