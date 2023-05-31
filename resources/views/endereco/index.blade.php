@extends('layout.app')
@section('main')


    <section>

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

            </tr>
            @endforeach
        </table>
            <ol>
                <li>
                    <a href="{{route('endereco.create')}}">

                      <button type="submit" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Inserir novo endereço</button>
                    </a>
                </li>
            </ol>
        </table>
    </section>
@endsection
