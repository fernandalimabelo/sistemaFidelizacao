@extends('layouts.appUser')

@section('conteudoUser')   
    <div class="tab-content" id="nav-tabContent">
        <!-- cupons cliente =============================================================================================================-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row mx-md-n5 col-sm">
                <!-- inicio grid 01 -->
                <div class="col py-3 px-md-5 border bg-light">
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class='pure-modal-wrap a-center small from-bottom'>
                            <h2 class='text-dark'>Seus Bilhetes Ativos</h2>
                            <span class='text-success'>* lista de empresas com seus cupons promocionais ativos</span>
                            <p>
                                <form action='#' method='POST'>
                                    <div class='modal-body'>
                                        <div class='form-group text-left'>
                                            <div class="input-group mb-3">
                                                <input type="text" name='nomeEstabelecimento' class="form-control" value="McDonalds" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                <input type="text" name='nomeProduto' class="form-control" value="Cerveja" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-eye"></i> Detalhes</button>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name='nomeEstabelecimento' class="form-control" value="Habib's" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                <input type="text" name='nomeProduto' class="form-control" value="Cachaça" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-eye"></i> Detalhes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </p>
                        </div>    
                    </div>
                </div>
                <!-- fim grid 01 -->

                <!-- inicio grid 02 -->
                <div class="col py-3 px-md-5 border bg-light">
                <div class="col py-3 px-md-5 border bg-dark text-light">
                    <div class='pure-modal-wrap a-center small from-bottom'>
                        <h2 class='text-white'>Detalhes</h2>
                        <span class='text-success'>* este é seu blihete promocional, imprima e leve-o no estabelecimento</span>
                        <p>
                        <form action='dbEstabelecimento.php' method='POST'>
                            <div class='modal-body'>
                                <div class='form-group text-left'>
                                    <label>Nome do Estabelecimento</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='nomeEstabelecimento' class="form-control" disabled>
                                    </div>
                                </div>
                                <div class='form-group text-left'>
                                    <label>Nome do Produto</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='nomeProduto' class="form-control" disabled>
                                    </div>
                                </div>
                                <div class='form-group text-left'>
                                    <label>Código do Cupom</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='codCupom' class="form-control" disabled>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                <a href="{{ route('db_user_print') }}" type="button" class="btn btn-success" title="Gerar Bilhete" target="_blank"><i class="fas fa-ticket-alt"></i> Imprimir Bilhete</a>
                                </div>
                            </div>
                        </form>
                        </p>
                    </div>
                </div> 
            </div>  
        </div>
    </div>
</div>
        

@endsection