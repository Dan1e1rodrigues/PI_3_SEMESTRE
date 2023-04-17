@extends('layout.carrinho')
@section('main')


<section class="h-100 h-custom" style="background-color: #d2c9ff;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <div class="p-5">
                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <h1 class="fw-bold mb-0 text-black">Carrinho</h1>
                        <h6 class="mb-0 text-muted"><!--aqui vai a contagem dos itens--> 1 item</h6>
                      </div>
                      <hr class="my-4">

                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="{{$carrinho[0]->Produto->ProdutoImagem[0]->IMAGEM_URL}}"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted">Shirt</h6>
                          <h6 class="text-black mb-0">{{$carrinho[0]->Produto->PRODUTO_NOME}}</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" />

                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0">{{$carrinho[0]->Produto->PRODUTO_PRECO}}</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                      </div>


                      <hr class="my-4">


                  <div class="col-lg-4 bg-grey">
                    <div class="p-5">
                      <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-4">
                        <h5 class="text-uppercase">Desconto: </h5>
                        <h5>R${{$carrinho[0]->Produto->PRODUTO_DESCONTO}}</h5>
                      </div>



                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-5">
                        <h5 class="text-uppercase">Total: </h5>
                        <h5>R${{$carrinho[0]->Produto->PRODUTO_PRECO-$carrinho[0]->Produto->PRODUTO_DESCONTO}}</h5>
                      </div>

                      <button type="button" class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Finalizar</button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection