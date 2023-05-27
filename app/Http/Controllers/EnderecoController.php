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
        $endereco->usuarioId = $request->usuarioId;
        $endereco->endereco = $request->endereco;
        $endereco->cep = $request->cep;
        $endereco->numResidencia = $request->numResidencia;
        $endereco->complemento = $request->complemento;
      $endereco->save();
  
        return redirect ('endereco');
      }

}
