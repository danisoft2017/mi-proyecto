<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('inicio');
});
Route::resource('productos', ProductoController::class);
Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{id}', [PostController::class,'show']);

