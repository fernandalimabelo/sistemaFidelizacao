<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SF - Home</title>
        <meta name="Sistema de Fidelização" content="Sistema de Fidelização - 2019" />
        <link type="image/png" href="{{asset('app-asset/img/favicon.png')}}"/>

        <!-- Title -->
        <title>Sistema de Fidelização</title>
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{asset('app-assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('app-assets/css/responsive/responsive.css')}}">
        <!-- modal -->
        <link rel="stylesheet" href="{{asset('app-assets/css/modal/modal.css')}}">
        <link rel="stylesheet" href="{{asset('app-assets/css/modal/style-modal.css')}}">
        {{-- bootstrap --}}
        <link rel="stylesheet" href="{{asset('app-assets/css/bootstrap/bootstrap.min.css')}}">
        {{-- others --}}
        <link rel="stylesheet" href="{{asset('app-assets/css/others/animate.css')}}">
        <link rel="stylesheet" href="{{asset('app-assets/css/others/elegant-font.css')}}">
        <link rel="stylesheet" href="{{asset('app-assets/css/others/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('app-assets/css/others/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('app-assets/css/others/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('app-assets/css/others/themify-icons.css')}}">

        <!-- icones -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>

    <body>    
            <!-- inicio nav horizontal -->
            <nav class="navbar navbar-expand-lg bg-dark">
                <a class="navbar-brand text-white" href="{{ url('/home') }}">Sistema de Fidelização</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <span class="navbar-item">
                        <a href="{{ route('logout') }}" onclick="console.log(event); event.preventDefault(); document.getElementById('frm-logout').submit()"; class="nav-link text-danger">
                            <i class="fas fa-sign-out-alt"></i> Sair <span class="sr-only">(current)</span>
                        </a>    
                        <form id="frm-logout" action="{{ route('logoutEmpresa') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </span>
                </div>
            </nav>
            <!-- fim nav horizontal -->
            <!-- inicio card head -->
            <div class="card  text-center">
                <div class="card-header bg-info text-light font-weight-bold">
                    Área Empresarial
                </div>
            </div>
            <!-- fim card head -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link text-info active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                        <i class="fas fa-ticket-alt"></i> Cupons
                    </a>
                    <a class="nav-item nav-link text-info" id="nav-promocoes-tab" data-toggle="tab" href="#nav-promocoes" role="tab" aria-controls="nav-promocoes" aria-selected="false">
                        <i class="fas fa-hand-holding-usd"></i> Promoções
                    </a>
                    <a class="nav-item nav-link text-info" id="nav-produtos-tab" data-toggle="tab" href="#nav-produtos" role="tab" aria-controls="nav-produtos" aria-selected="false">
                        <i class="fas fa-wine-bottle"></i> Produtos
                    </a>
                </div>
            </nav>