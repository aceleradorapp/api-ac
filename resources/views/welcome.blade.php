<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">

        <div class="nav-welcome shadow">
            <img src="{{ asset('assets/image/banner2.png') }}"  class="banner shadow-owner" alt="">
            <img src="{{ asset('assets/image/logoAC.png') }}" class="logo" alt="">

            <div class="menu-fixed">
                <div>
                    <a href="">Home</a>
                    <span>|</span>
                    <a href="">Projetos</a>
                    <span>|</span>
                    <a href="">Contato</a>
                    <span>|</span>
                    <a href="{{ route('login') }}" class="bt-round-outline bt-enter">Entrar</a>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 65px">
            <div class="row">
                <div class="col-md-12 tile-icon center-col">
                    <h3>PARTICÍPE DA NOSSA EQUIPE</h3>
                </div>
            </div>

            <div class="row">
                <a href="{{ route('register') }}" class="col-md-4 center-col">
                    <img src="{{ asset('assets/image/icon2.png') }}"  alt="">
                </a>
                <a href="#" class="col-md-4 center-col">
                    <img src="{{ asset('assets/image/icon1.png') }}" alt="">
                </a>
                <a href="#" class="col-md-4 center-col">
                    <img src="{{ asset('assets/image/icon3.png') }}" alt="">
                </a>
            </div>

            <div class="row">
                <div class="col-md-4 center-col">
                    <div class="context-icon">
                        <p>Área de cadastro de usuários Freelancers</p>
                    </div>
                </div>
                <div class="col-md-4 center-col">
                    <div class="context-icon">
                        <p>Área de cadastro de parceiros</p>
                    </div>
                </div>
                <div class="col-md-4 center-col">
                    <div class="context-icon">
                        <p>Área destinada para treinamento dos usuários</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-12 center-col">
                    <h3>“Cuidamos do desenvolvimento para você”</h3>
                </div>
            </div>
            <div class="col-md-12">
                    <p class="lead">
                        O portal foi desenvolvido para atender as necessidades da demanda de conteúdo interativo para empresas do ramo. Aumentamos a produtividade e garantimos a qualidade do material.
                    </p>
                    <p class="lead">
                        O Portal controla todo o processo de criação, controla equipes de desenvolvimento, cirando orçamentos e datas de entrega com maior precisão.
                    </p>
                    <p class="lead">
                        Também oferece ferramentas para acompanhar o desenvolvimento do material em tempo real.
                    </p>
                    <p class="lead">
                        Uma área exclusiva para solicitação de conteúdo, com modelos de projetos, exemplos e pré-orçamentos
                    </p>
            </div>
        </div>





        {{-- <div class="nav-welcome ">
            <img src="{{ asset('assets/image/banner2.png') }}"  class="shadow" alt="">
            <div class="items-menu">
                <a href="">Home</a>
                <span>|</span>
                <a href="">Projetos</a>
                <span>|</span>
                <a href="">Contato</a>
                <a href="{{ route('login') }}" class="bt-round-outline">Entrar</a>
            </div>

            <div class="logo-ac">
                <img src="{{ asset('assets/image/logoAC.png') }}"alt="">
            </div>

        </div> --}}


        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    </body>
</html>
