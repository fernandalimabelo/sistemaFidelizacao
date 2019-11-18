    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="fancy-top-features-content">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <div class="single-top-feature">
                                        <h5><i class="fas fa-ticket-alt text-info"></i> Cupom de Fidelização</h5>
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="single-top-feature">
                                        <h5><i class="fas fa-building text-info"></i> Para Empresas</h5>
                                        <p><a href="{{ route('db_empresa') }}">Dashboard Empresa</a> </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="single-top-feature">
                                        <h5><i class="fa fa-users text-info" aria-hidden="true"></i> Para Clientes</h5>
                                        <p><a href="{{ route('db_user') }}">Dashboard Cliente</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Top Feature Area End ***** -->    
    
    <!-- ***** Footer init ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50"></div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>Copyright &copy; | 2019 Desenvolvido por FJK</p>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <nav>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer end ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('app-assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('app-assets/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('app-assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('app-assets/js/others/plugins.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('app-assets/js/active.js')}}"></script>
    <!-- modal js -->
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css"> --}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    </body>
</html>