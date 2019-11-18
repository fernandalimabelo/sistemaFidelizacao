@extends('layouts.app')

@section('conteudo')

<div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url({{asset('app-assets/img/bg-img/hero-2.jpg')}})">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="fancy-hero-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class='pure-modal-wrap a-center small from-bottom text-center w-auto p-3'>
                                        <h4><i class="fas fa-building text-info"></i></h4>
                                        <h5 class='text-info'>PARA EMPRESAS</h5>
                                </div>
                                <div class="card-header text-info text-center">{{ __('Cadastrar') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('empresa.register') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" name="name" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                            <div class="col-md-6">
                                                <input id="phone" name="phone" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>
                                            <div class="col-md-6">
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="category">
                                                    <option value="Automotivo" selected>Automotivo</option> 
                                                    <option value="Casa e Decoração">Casa e Decoração</option>
                                                    <option value="Energia">Energia</option>
                                                    <option value="Meio Ambiente">Meio Ambiente</option>
                                                    <option value="Moda">Moda</option>
                                                    <option value="Tecnologia">Tecnologia</option>
                                                    <option value="Gastronomia">Gastronomia</option>
                                                    <option value="Finanças">Finanças</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-8">

                                                <button onClick="window.location.href='{{ url('/home') }}'" class="btn btn-danger">
                                                    {{ __('Cancelar') }}
                                                </button>

                                                <button type="submit" class="btn btn-info">
                                                    {{ __('Cadastrar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
