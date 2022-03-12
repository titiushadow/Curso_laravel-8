<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

 route::get('/posts' , [PostController::class , 'index']);


Route::get('/', function () {
    return view('welcome');
});
