@extends('layout.app')
@section('main')

@if(session()->has('message'))
            {{session()->get('message')}}
        @endif

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
                <form action="{{route('endereco.update',['endereco'=>$endereco->ENDERECO_ID])}}" method="post" >
                      @csrf
                      <input type="hidden" name="_method" value="PUT">
                        <div>
                            <label for="">Nome(Ex:casa, trabalho e etc.)</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NOME" value="{{$endereco->ENDERECO_NOME}}" required>
                        </div>

                        <div>
                            <label for="">LOGRADOURO</label>
                            <input class="inputLogin" type="text" name="ENDERECO_LOGRADOURO" value="{{$endereco->ENDERECO_LOGRADOURO}}" required>
                        </div>

                        <div>
                            <label for="">N° Residência</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NUMERO" value="{{$endereco->ENDERECO_NUMERO}}" required>
                        </div>

                        <div>
                            <label for="">Complemento</label>
                            <input class="inputLogin" type="text" name="ENDERECO_COMPLEMENTO" value="{{$endereco->ENDERECO_COMPLEMENTO}}"required>
                        </div>

                        <div>
                            <label for="">CEP</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CEP" value="{{$endereco->ENDERECO_CEP}}" required minlength=8 maxlength=8 onkeypress="return semLetra(event)">
                        </div>
                        <div>
                            <label for="">Cidade</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CIDADE" value="{{$endereco->ENDERECO_CIDADE}}" required>
                        </div>
                        <div>
                            <label for="">Estado</label>
                            <select  class="inputLogin" name="ENDERECO_ESTADO" required>

                                <option selected value="{{$endereco->ENDERECO_ESTADO}}">{{$endereco->ENDERECO_ESTADO}}</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                        </select>
                        <div class="form-check">

                    

                    </div>
                      <button type="submit" class="button-nxy">Atualizar</button>
                    </form>
                </li>
            </ol>
        </table>
    </section>
    </div>

@endsection
