<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('home');
});

Route::resource('/produtos', ProdutosController::class);
Route::get('/produtos/delete/{id}', [ProdutosController::class, 'destroy'])->name('produtos.delete');
