<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();//retorna todos os produtos e guarda nessa variavel

      return view('produto.index')->with('produtos',$produtos);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)
    }

    public function show(Produto $produto){ // model e variavel
     // dd($produto);
     // retorna só um produto
      //return view('produto.show')->with('produto',$produto);
      $maisProdutos = Categoria::find($produto->CATEGORIA_ID)->Produtos;
      return view ('produto.show', ['produto' =>$produto,'maisProdutos' => $maisProdutos]);

    }

}