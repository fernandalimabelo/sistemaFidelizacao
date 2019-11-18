@extends('layouts.app')

@section('conteudo')
        <!-- ***** Hero Area Start ***** -->
        <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url({{asset('app-assets/img/bg-img/hero-1.jpg')}})">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="fancy-hero-content text-center">
                        <h2>Olá, esse é o Sistema de Fidelização!</h2>                        
                            <a href="{{ route('loginUser') }}"><label class='open-modal btn fancy-btn align-middle'> <span class='align-middle'> MEUS CUPONS </span></label></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Hero Area End ***** -->
    </body>

@endsection