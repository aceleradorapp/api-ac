<!doctype html>
<html lang="pt-br" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/style-initialize.css') }}" rel="stylesheet">

</head>
<body>

<div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-top">
                            <div class="item">                                                                
                                <a href="{{ url('/') }}" class="btn-menu">Voltard</a>
                            </div>
                            <div class="item">
                                                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row space-top">
                    <div class="col-md-6">
                        <div class="logo-init">
                            <img src="{{ asset('assets/image/logoAC.png') }}" class="" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content">
                            
                                     
                        </div>
                    </div>            

                </div>
            </div>            
        </div>

    <!-- <div class="image-background" class="shadow" style="position: fixed; z-index: -1; opacity:0.7">
        <img src="{{ asset('assets/image/banner.png') }}" alt="">
    </div>

    <div id="app">

        <div class="menu  shadow-sm">
            <a href="{{url('/')}}">
                <img src="{{ asset('assets/image/logoAC.png') }}" alt="">
            </a>

            <div class="app-login-register">

                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login</a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Cadastro</a>
                @endif

            </div>
        </div>
    </div> -->



        <main class="py-4">
            @yield('content')
        </main>
    {{-- </div> --}}

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>

    <script>
        window.onload = function(){

            $('.cpf').mask('000.000.000-00');
            $('.cnpj').mask('00.000.000/0000-14');
            $('.number').mask('99999');
            $('.zipCode').mask('00.000-00');
            //$('.date').mask('00/00/0000');
            $('.tel').mask('(00)000-000000');

        }
    </script>

</body>
</html>
