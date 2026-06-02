<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClientesController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
Route::resource('producto', ProductoController::class);

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{id}', [PostController::class,'show']);

route::get('/clientes', [ClientesController::class,'index'])->name('clientes.index');
route::get('/clientes/create', [ClientesController::class,'create'])->name('clientes.create');
route::post('/clientes', [ClientesController::class,'store'])->name('clientes.store');
route::get('/clientes/{id}', [ClientesController::class,'show'])->name('clientes.show');
route::get('/clientes/{id}/edit', [ClientesController::class,'edit'])->name('clientes.edit');
route::put('/clientes/{id}', [ClientesController::class,'update'])->name('clientes.update');
route::delete('/clientes/{id}', [ClientesController::class,'destroy'])->name('clientes.destroy');
