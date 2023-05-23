<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;

class CategoriaController extends Controller
{


    public function show(Categoria $categoria){ // model e variavel
       
        $maisProdutos = Categoria::find($categoria->CATEGORIA_ID)->Produtos;
        $produto = Produto::where('CATEGORIA_ID',$categoria->CATEGORIA_ID)->get();
        return view ('categoria.show', ['categoria' =>$categoria,'maisProdutos' => $maisProdutos, 'produto',$produto]);
    

    }
}
