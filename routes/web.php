<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
>>>>>>> main

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
=======
Route::get('/carrinho/{produto}',[CarrinhoController::class,'store'])->name('carrinho.store');
Route::get('/carrinho',[CarrinhoController::class, 'index'])->name('carrinho.index');


Route::get('/dashboard', function () {
    return redirect('/dashboard');
>>>>>>> main
})->middleware(['auth', 'verified'])->name('dashboard');//só vai entrar quem estiver autenticado

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


<<<<<<< HEAD
use App\http\Controllers\ProdutoController;//importar função
=======

>>>>>>> main

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto',[ProdutoController::class,'index']);// controllee-class-funcão dentro da controller(site)
Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name('produto.show');//aqui , no servidor, será produto/1

//Route::get('/produto/{produto}',[ProdutoController::class,'show']); ao criar uma rota, tambem criamos o caminho para ela ser chamada
// se n é necessario a model, va direto para a view

// se o arquivo está fora de uma pasta , é só colocar '/'
