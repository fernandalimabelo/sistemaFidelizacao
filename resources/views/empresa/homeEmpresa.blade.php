@extends('layouts.appEmpresa')

@section('conteudoEmpresa')
       
<div class="tab-content" id="nav-tabContent">
            <!-- cupons =============================================================================================================-->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Gerar Cupom</h2>
                                <p>
                                    <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>CPF do Cliente</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='cpfCliente' class="form-control" placeholder="CPF" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Código do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeCliente' class="form-control" placeholder="Código" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Estabelecimento</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='estabelecimento' class="form-control" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                </div>
                                            </div>

                                            <div class='modal-footer'>
                                                <input type='submit' name='submitCadastroCupom' class='btn btn-success btn-lg btn-block btn-sm' title='Gerar Cupom' value='Gerar'>
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
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Buscar Cupom</h2>
                                <span class='text-info'>* para incrementar a pontuação, busque pelo cupom correspondente</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>CPF do Cliente</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='cpfCliente' class="form-control" placeholder="Ex. 1222" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>

                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Nome do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeProduto' class="form-control" placeholder="Ex. Pizza" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>
                                            </div>

                                            <div class='modal-footer'>
                                                <input type='submit' name='submitCadastroCupom' class='btn btn-success btn-lg btn-block btn-sm' title='Buscar Cupons' value='Buscar'>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div> 

                        <div class="col py-3 px-md-5 border bg-dark text-white">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <div class="text-right">
                                <div class="container">
                                    <div class="row">
                                        <!-- botão de incremento -->
                                        <div class="col-sm">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" title='Incrementar Pontuação' aria-label="Recipient's username" aria-describedby="button-incremento">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="button-incremento" title='Incrementar Pontuação'><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- botão de decremento -->
                                        <div class="col-sm">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" title='Decrementar Pontuação' aria-label="Recipient's username" aria-describedby="button-incremento">
                                                <div class="input-group-append">
                                                    <button class="btn btn-warning" type="button" id="button-incremento" title='Decrementar Pontuação'><i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- botão de decremento -->
                                         <div class="col-sm">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="Apagar" title="Excluir Cupom" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger" type="button" id="button-incremento" title='Excluir Cupom'><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Cód. Cupom</th>
                                            <th scope="col">Cód. Cliente</th>
                                            <th scope="col">Cód. Produto</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col" class="bg-success text-light">Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <td>João</td>
                                            <td>Pizza</td>
                                            <th scope="row" class="bg-success text-light">9</th>
                                        </tr>                                        
                                    </tbody>
                                </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>
                        </div> 
                    </div>
                    <!-- fim grid 02 -->
                </div>  
            </div>
            <!-- promoções =============================================================================================================-->
            <div class="tab-pane fade" id="nav-promocoes" role="tabpanel" aria-labelledby="nav-promocoes-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-danger'>Promoções - Pendentes</h2>
                                <span class='text-danger'>* bilhetes de promoções que não foram enviados</span>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Código</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col" class="bg-success text-white">Pontuação</th>
                                            <th scope="col">Enviar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <td>João</td>
                                            <td>Pizza</td>
                                            <th scope="row" class="bg-success text-white">10</th>
                                            <td>
                                                <button type="button" class="btn btn-outline-success btn-sm" title='Enviar para Cliente'><i class="fas fa-check-double"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>    
                        </div>
                    </div>
                    <!-- fim grid 01 -->

                     <!-- inicio grid 02 -->
                     <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-success'>Buscar Promoções - Ativas</h2>
                                <span class='text-success'>* bilhetes de promoções que já foram enviados</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>Código do Cliente</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='codCliente' class="form-control" placeholder="Ex. 1222" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>

                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Código do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeProduto' class="form-control" placeholder="Ex. Pizza" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>
                                            </div>

                                            <div class='modal-footer'>
                                                <input type='submit' name='submitCadastroCupom' class='btn btn-success btn-lg btn-block btn-sm' title='Buscar Cupons' value='Buscar'>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div> 

                        <div class="col py-3 px-md-5 border bg-dark text-white">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                            <div class="text-right">
                                    <button type="button" class="btn btn-danger btn-sm" title='Desabilitar Promoção'>Desabilitar <i class="fas fa-times"></i></button>
                                </div>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Cód. Cupom</th>
                                            <th scope="col">Cód. Cliente</th>
                                            <th scope="col">Cód. Produto</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col" class="bg-success text-light">Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <td>João</td>
                                            <td>Pizza</td>
                                            <th scope="row" class="bg-success text-light">9</th>
                                        </tr>                                        
                                    </tbody>
                                </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>
                        </div> 
                    </div>
                    <!-- fim grid 02 -->
                </div>  
            </div>
            <!-- produtos =============================================================================================================-->
            <div class="tab-pane fade" id="nav-produtos" role="tabpanel" aria-labelledby="nav-produtos-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Cadastrar Produto</h2>
                                <!-- <div class='alert alert-success'>
                                    <p>{{$produtos->message}}</p>
                                </div> -->
                                <span class='text-info'>* somente produtos elegíveis a fidelização</span>
                                <p>
                                    <form action='{{ route('addProduto') }}' method='POST' enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>Nome</label>
                                                <input type='text' name='nome_produto' class='form-control' required>
                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Preco</label>
                                                <input type='text' name='preco_produto' class='form-control' required>
                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Limite de pontos</label>
                                                <input min='1' type='number' name='pontos_produto' class='form-control' required>
                                            </div>
                                            <div class='modal-footer'>
                                            <input type='submit' name='submit' class='btn btn-success btn-lg btn-block btn-sm' value='Cadastrar'>
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
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Buscar Produtos</h2>
                                <span class='text-info'>* produtos cadastrados no sistema</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>Nome do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeProduto' class="form-control" placeholder="Ex. Pizza" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div> 

                        <div class="col py-3 px-md-5 border bg-dark text-white">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Cód. Produto</th>
                                            <th scope="col">Nome Produto</th>
                                            <th scope="col">Limite de Pontos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <th scope="row">Pizza</th>
                                            <th scope="row">10</th>
                                        </tr>                                        
                                    </tbody>
                                </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>
                        </div> 
                    </div>
                    <!-- fim grid 02 -->
                </div>        
            </div>
        </div>


@endsection