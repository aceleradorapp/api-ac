<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AC</title>
        <link rel="icon" type="imagem/png" href="{{ asset('assets/image/logo-pequeno-xt.png') }}" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style-initialize.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style-dashboard.css') }}" rel="stylesheet">
        
        

    </head>
    <body>        
        <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-top">
                            <div class="item">                                
                                <img src="{{ asset('assets/image/logoAC.png') }}" class="" alt="" style="height:40px">
                            </div>
                            
                            <div class="item">
                                <div class="dropdown">
                                    <a id="navbarDropdown" class="btn-menu dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row space-top"> 
                    <div class="col-md-12">
                       <div class="tools-dashboard">
                            <a href="{{ url('home') }}" class="btn-menu btn-dashboard"><i class="fas fa-laptop-house fa-2x"></i></a>
                            <a href="{{ url('tools') }}" class="btn-menu btn-dashboard"><i class="fas fa-tools fa-2x"></i></a>
                            <a href="#" class="btn-menu btn-dashboard disable-click"><i class="far fa-chart-bar fa-2x"></i></a>
                            <a href="#" class="btn-menu btn-dashboard disable-click"><i class="far fa-user fa-2x"></i></a>
                       </div>
                    </div>                   
                </div>
            </div>   
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <div class="visitor">
                        Seja bem vindo! Sua conta é de visitante.
                    </div>
                </div>
            </div>         
        </div>                                                                    
        
        
            @yield('content')
        
                

        <!-- <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <img src="{{ asset('assets/image/logoAC.png') }}" class="hide-mobile" alt="" style="width:5%; margin-top: 30px;">
                            <div class="footer-item">
                                <a href="" class="btn-menu hide-mobile">Empresa</a>
                                <a href="" class="btn-menu hide-mobile">Contato</a>
                                <a href="{{ url('registration') }}" class="btn-menu">Cadastro</a>
                            </div>
                        </div>
                    </div> 
                </div>                
            </div>
        </div> -->

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    </body>
</html>
