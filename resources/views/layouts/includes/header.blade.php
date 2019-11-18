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
        {{-- icones font awesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
    </head>

    <body>
        <!-- ***** Header Area Start ***** -->
        <header class="header_area" id="header">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <nav class="h-100 navbar navbar-expand-lg align-items-center">
                            <a class="navbar-brand" href="{{ url('/home') }}">Sistema de Fidelização</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                            <div class="collapse navbar-collapse" id="fancyNav">
                                <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a href="{{ route('loginEmpresa') }}"><label class='open-modal dropdown-item text-info'><i class="fas fa-building"></i> Empresas</label></a>
                                            <a href="{{ route('loginUser') }}"><label class='open-modal dropdown-item text-success'><i class="fa fa-users" aria-hidden="true"></i> Clientes</label></a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a href="{{ route('registerEmpresa') }}"><label class='open-modal dropdown-item text-info'><i class="fas fa-building"></i> Empresas</label></a>
                                            <a href="{{ route('registerUser') }}"><label for='modal-trigger-center-cadastrarCli' class='open-modal dropdown-item text-success'><i class="fa fa-users" aria-hidden="true"></i> Clientes</label></a>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->