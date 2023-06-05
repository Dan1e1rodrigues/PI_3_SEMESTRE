@extends('layout.app')
@section('main')

@if(count($enderecos) < 1 )
    <h1>Você ainda não tem nenhum endereço cadastrado.</h1>
    <a href="{{route('endereco.create')}}">

        <button type="submit" class="btn btn-dark btn-block btn-lg"
        data-mdb-ripple-color="dark">Cadastrar novo endereço</button>
        </a>

@else
        <section>
        <div class="principal-rty">
        <h1>Meus endereços</h1>
        <div class="tabela-ty">
    <table class="table">
        <thead class="table-secondary">
            <tr>

                <th scope="col">Nome</th>
                <th scope="col">LOGRADOURO</th>
                <th scope="col">NUMERO</th>
                <th scope="col">COMPLEMENTO</th>
                <th scope="col">CEP</th>
                <th scope="col">CIDADE</th>
                <th scope="col">ESTADO</th>
                <th scope="col">ATUALIZAR</th>


            </tr>
        </thead>
        @foreach($enderecos as $endereco)
            <tr>
                <td>{{$endereco->ENDERECO_NOME}}</td>
                <td>{{$endereco->ENDERECO_LOGRADOURO}}</td>
                <td>{{$endereco->ENDERECO_NUMERO}}</td>
                <td>{{$endereco->ENDERECO_COMPLEMENTO}}</td>
                <td>{{$endereco->ENDERECO_CEP}}</td>
                <td>{{$endereco->ENDERECO_CIDADE}}</td>
                <td>{{$endereco->ENDERECO_ESTADO}}</td>
                <td> <a href="{{route('endereco.edit',['endereco'=>$endereco->ENDERECO_ID])}} " class="btn btn-primary" role="button">Editar</a></td></td>

            </tr>
        @endforeach
        </table>
            <ol>
                <li>
                    <a href="{{route('endereco.create')}}">

                      <button type="submit" class="d-flex justify-content-end btn btn-primary btn-lg ms-auto mb-4 p-2 fs-6">Inserir novo endereço</button>
                    </a>
                </li>
            </ol>
        </table>
        </div>
    </section>
    @endif
@endsection
