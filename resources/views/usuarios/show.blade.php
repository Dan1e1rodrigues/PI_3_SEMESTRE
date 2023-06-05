@extends('layout.app')
    @section('main')

    <div class="principal-poy">
      <h1>Nome de Usuário: {{$user->USUARIO_NOME}}</h1>
      <h1>Email: {{$user->USUARIO_EMAIL}}</h1>
      <h1>CPF: {{$user->USUARIO_CPF}}</h1>

      <a href="{{route('usuarios.edit',['user'=>$user->USUARIO_ID])}} " class="btn btn-primary" role="button">Editar</a></td>

      <div class="d-flex justify-content-between mb-4">
                        <a href="/">
                          <button type="submit" class="buttonvolt">Voltar</button>
                        </a>

      </div>
    </div>
@endsection
