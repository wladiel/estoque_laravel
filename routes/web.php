<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('home');
});

Route::resource('/produtos', ProdutosController::class);
Route::resource('/categorias', CategoriaController::class);
