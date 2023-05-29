@extends('layout.app')
@section('main')

<!-- {{$enderecos}} -->
    <section>
        <table>
            <ol>
                <li>
                    <a href="{{route('endereco.store')}}">

                      <button type="submit" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Inserir novo endereço</button>
                    </a>
                </li>
            </ol>
        </table>
    </section>
@endsection
