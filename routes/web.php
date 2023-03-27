<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;//importar função

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto',[ProdutoController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name('produto.show');//aqui , no servidor, será produto/1

//Route::get('/produto/{produto}',[ProdutoController::class,'show']); ao criar uma rota, tambem criamos o caminho para ela ser chamada
// se n é necessario a model, va direto para a view 

// se o arquivo está fora de uma pasta , é só colocar '/'