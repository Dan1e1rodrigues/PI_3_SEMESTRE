<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EnderecoController;




Route::get('/', function () {
    return view('welcome');
});

Route::post('/carrinho/{produto}',[CarrinhoController::class,'store'])->name('carrinho.store');
Route::get('/carrinho',[CarrinhoController::class, 'index'])->name('carrinho.index');

Route::get('/endereco',[EnderecoController::class,'index'])->name('endereco.index');
Route::get('/endereco/store',[EnderecoController::class,'store'])->name('endereco.store');
Route::get("/endereco/create", [EnderecoController::class, "create"]);

Route::post('/pedido',[PedidoController::class,'checkout'])->name('pedido.checkout');
Route::get('/pedido',[PedidoController::class,'index'])->name('pedido.index');
Route::get('/pedido/{pedido}',[PedidoController::class,'show'])->name('pedido.show');

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');//só vai entrar quem estiver autenticado

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto',[ProdutoController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name('produto.show');//aqui , no servidor, será produto/1

//Route::get('/produto/{produto}',[ProdutoController::class,'show']); ao criar uma rota, tambem criamos o caminho para ela ser chamada
// se n é necessario a model, va direto para a view

// se o arquivo está fora de uma pasta , é só colocar '/'
