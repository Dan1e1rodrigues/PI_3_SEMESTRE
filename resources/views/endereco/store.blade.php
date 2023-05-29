@extends('layout.app')
@section('main')


    <section>
        <table>
            <ol>
                <li>
                'ENDERECO_NOME',
        'ENDERECO_LOGRADOURO',
        'ENDERECO_NUMERO',
        'ENDERECO_COMPLEMENTO',
        'ENDERECO_CEP',
        'ENDERECO_CIDADE',
        'ENDERECO_ESTADO',
        'ENDERECO_APAGADO'
                    <form action="{{route('endereco.store')}}"  method="POST">
                      @csrf
                        <div>
                            <label for="">Rua</label>
                            <input class="" type="text" name="ENDERECO_NOME">
                        </div>

                        <div>
                            <label for="">Endereço</label>
                            <input class="" type="text" name="ENDERECO_LOGRADOURO">
                        </div>

                        <div>
                            <label for="">CEP</label>
                            <input class="" type="text" name="cep">
                        </div>

                        <div>
                            <label for="">N° Residência</label>
                            <input class="" type="number" name="numResidencia">
                        </div>

                        <div>
                            <label for="">Complemento</label>
                            <input class="" type="text" name="complemento">
                        </div>
                      <button type="submit" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Inserir novo endereço</button>
                    </form>
                </li>
            </ol>
        </table>
    </section>
@endsection
