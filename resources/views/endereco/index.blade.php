@extends('layout.app')
@section('main')

<!-- {{$enderecos}} -->
    <section>
        <table>
            <ol>
                <li>          
                    <form action="{{route('endereco.store')}}"  method="POST">
                      @csrf
                      <button type="submit" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Inserir novo endereço</button>
                    </form>
                </li>
            </ol>
        </table>
    </section>
@endsection