<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;
use illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function store(Produto $produto,Request $request){//guardar produto no carrinho
        $item = Carrinho::where('USUARIO_ID',Auth::user()->USUARIO_ID)//verifica se o produto existe
            -   where('PRODUTO)ID', $produto->PRODUTO_ID)->first();//
            if($item){
                $item = $item->update([ //se ja exise, ele atualiza
                    'ITEM_QTD'=>$request->ITEM_QTD 
                ]);
            }else{
                $item = Carrinho::create([
                    'USUARIO_ID'=>Auth::user()->USUARIO_ID,
                    'PRODUTO_ID'=>$produto->PRODUTO_ID,
                    'ITEM_QTD'=>$request->ITEM_QTD
                ]);
            }
      

        return redirect(route('carrinho.index'));
    }

    public function index(){
        $carrinho = Carrinho::where('USUARIO_ID',Auth::user()->USUARIO_ID)->get();
        return view ('carrinho.store')->with('carrinho',$carrinho);

    }
}
