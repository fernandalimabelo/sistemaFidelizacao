@extends('layouts.appPrint')

@section('conteudoPrint')

<div class="container">
    <!-- inicio grid -->
    <div class="col py-3 px-md-5 border bg-light">
        <div class='pure-modal-wrap a-center small from-bottom px-md-5'>
            <h4 class='text-dark'>Bilhete de Promoção | <span class="font-weight-bold">Código: 000</span></h4>
            <span class='text-success'>* este cupom deve ser apresentado impresso ou em formato .pdf na referida empresa</span>
            <p>
                <!-- linha 01 -->
                <div class="container">
                    <!-- linha 01 -->
                    <label class="font-weight-bold">Sobre do Estabelecimento</label>
                    <div class="row">
                        <div class="col">
                            <div class='form-group text-left'>
                                <label>Código:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='codEstabelecimento' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Nome:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='nomeEstabelecimento' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Telefone:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='telefoneEstabelecimento' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Endereço:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='enderecoEstabelecimento' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Tipo:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='tipoEstabelecimento' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim linha 01 -->
                    <hr style="margin-top: 10px; margin-bottom: 10px;"/>
                    <!-- linha 02 -->
                    <label class="font-weight-bold">Sobre do Cliente</label>
                    <div class="row">
                        <div class="col">
                            <div class='form-group text-left'>
                                <label>Código:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='codCliente' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Nome:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='nomeCliente' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>CPF:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='nomeCliente' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Telefone:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='telefoneCliente' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim linha 02 -->
                    <hr style="margin-top: 10px; margin-bottom: 10px;"/>
                    <!-- linha 03 -->
                    <label class="font-weight-bold">Sobre do Bilhete</label>
                    <div class="row">
                        <div class="col">
                            <div class='form-group text-left'>
                                <label>Código:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='codCliente' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col border-left">
                            <div class='form-group text-left'>
                                <label>Produto:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name='nomeCliente' class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim linha 03 -->
                </div>
            </p>
        </div>
    </div>
    <!-- fim grid 01 -->
</div>

@endsection