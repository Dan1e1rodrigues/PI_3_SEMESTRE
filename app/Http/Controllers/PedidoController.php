<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){

        $pedidos = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();
        console.log($pedidos);

      return view('pedido.index')->with('pedidos',$pedidos);
    }
    public function checkout(){

        $pedido =Pedido::create([
            'USUARIO_ID' => Auth::user()->USUARIO_ID,
            'STATUS_ID' => 2,
            'PEDIDO_DATA'=> date("Y/m/d")
        ]);


      return view('pedido.index')->with('pedidos',$pedidos);
    }
    public function show(Pedido $pedido){

         $pedidos = Pedido::find($pedido->PEDIDO_ID)->Pedidos;
         return view ('pedido.show', ['pedido' =>$pedido,'pedidos' => $pedidos]);

       }
}
