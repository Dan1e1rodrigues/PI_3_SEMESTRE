@extends('layout.app')
@section('main')

    <script>
     
     function semLetra(a){
       var x= a.which || e.keycode;
       if ((x>=48 && x<=57) || (x==44))
       {
         return true;
       }else{
         return false;
       }
     }
     </script>

    <div class="principal-yt">
    <section>
        <table>
            <ol>
                <li>
                    <form action="{{route('endereco.store')}}"  method="POST">
                      @csrf
                        <div>
                            <label for="">Nome(Ex:casa, trabalho e etc.)</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NOME" required>
                        </div>

                        <div>
                            <label for="">LOGRADOURO</label>
                            <input class="inputLogin" type="text" name="ENDERECO_LOGRADOURO" required>
                        </div>

                        <div>
                            <label for="">N° Residência<</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NUMERO" required>
                        </div>

                        <div>
                            <label for="">Complemento</label>
                            <input class="inputLogin" type="text" name="ENDERECO_COMPLEMENTO" required>
                        </div>

                        <div>
                            <label for="">CEP</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CEP" required minlength=8 maxlength=8 onkeypress="return semLetra(event)"> 
                        </div>
                        <div>
                            <label for="">Cidade</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CIDADE" required>
                        </div>
                        <div>
                            <label for="">Estado</label>
                            <input class="inputLogin" type="text" name="ENDERECO_ESTADO" required>
                        </div>
                      <button type="submit" class="button-nxy">Inserir</button>
                    </form>
                </li>
            </ol>
        </table>
    </section>
    </div>
     
@endsection
