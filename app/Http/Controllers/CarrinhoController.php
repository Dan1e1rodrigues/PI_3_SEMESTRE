<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;
use illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function store(Produto $produto){
        $carrinho =Carrinho::create([
            'USUARIO_ID' => Auth::user()->USUARIO_ID,
            'PRODUTO_ID' => $produto->PRODUTO_ID,
            'ITEM_QTD' => 1

        ]);

        return redirect(route('carrinho.index'));
    }

    public function index(){
        $carrinho = Carrinho::where('USUARIO_ID',Auth::user()->USUARIO_ID)->get();
        return view ('carrinho.store')->with('carrinho',$carrinho);

    }
}
