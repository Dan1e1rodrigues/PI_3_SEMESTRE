<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index(){
        $enderecos = Endereco::all();//retorna todos os produtos e guarda nessa variavel

        return view('endereco.index')->with('enderecos',$enderecos);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)

    }
    public function create(){
        return view ('endereco.create', ['categorias' => []]);
      }
      public function store(Request $request){
        $endereco = new Endereco();
        $endereco->ENDERECO_NOME = $request->ENDERECO_NOME;
        $endereco->ENDERECO_LOGRADOURO = $request->ENDERECO_LOGRADOURO;
        $endereco->ENDERECO_NUMERO = $request->ENDERECO_NUMERO;
        $endereco->ENDERECO_COMPLEMENTO = $request->ENDERECO_COMPLEMENTO;
        $endereco->ENDERECO_CEP = $request->ENDERECO_CEP;
        $endereco->ENDERECO_CIDADE = $request->ENDERECO_CIDADE;
        $endereco->ENDERECO_ESTADO = $request->ENDERECO_ESTADO;
        $endereco->ENDERECO_CIDADE = $request->ENDERECO_CIDADE;
        $endereco->ENDERECO_APAGADO = $request->ENDERECO_APAGADO;

        // Endereco::create([
            // 'USUARIO_ID' => Auth::user()->USUARIO_ID,
        //     'PEDIDO_ID' =>$pedido->PEDIDO_ID,
        //     'PRODUTO_ID' => $item->PRODUTO_ID,
        //     'ITEM_QTD' => $item->ITEM_QTD,
        //     'ITEM_PRECO'=>$item->Produto->PRODUTO_PRECO
        // ]);


      $endereco->save();

        return redirect ('endereco');
      }

}
