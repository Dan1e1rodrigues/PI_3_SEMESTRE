<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EnderecoController extends Controller
{
    public function __construct()
    {
     $this->endereco = new Endereco();
     $this->end = new Endereco();
    }

    public function index(){
        $enderecos = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID, ['ENDERECO_APAGADO','<=','1'])->get();//retorna todos os produtos e guarda nessa variavel


        return view('endereco.index')->with('enderecos',$enderecos);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)

    }
    public function create(){
        return view ('endereco.create');
      }
      public function store(Request $request){

        Endereco::create([
         'USUARIO_ID'=> Auth::user()->USUARIO_ID,
          'ENDERECO_NOME'=>$request->ENDERECO_NOME,
          'ENDERECO_LOGRADOURO'=>$request->ENDERECO_LOGRADOURO,
          'ENDERECO_NUMERO'=>$request->ENDERECO_NUMERO,
          'ENDERECO_COMPLEMENTO'=>$request->ENDERECO_COMPLEMENTO,
          'ENDERECO_CEP'=>$request->ENDERECO_CEP,
          'ENDERECO_CIDADE'=>$request->ENDERECO_CIDADE,
          'ENDERECO_ESTADO'=>$request->ENDERECO_ESTADO,
          'ENDERECO_APAGADO'=>0
        ]);
        return redirect ('endereco');
      }

      public function edit(Endereco $endereco){
        return view('endereco.edit',['endereco'=>$endereco]);

      }

      public function update(Request $request, string $id){



        $atualizado = $this->endereco->where('ENDERECO_ID',$id)->update($request->except(['_token', '_method']));

        if($atualizado){
            return redirect('endereco')->with('message','Atualizado com sucesso!');

        }else{
            return redirect('endereco')->with('message','Ocorreu algum erro, tente novamente mais tarde');
        }
      }


}
