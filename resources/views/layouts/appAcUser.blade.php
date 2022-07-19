<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AC</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/awesome/all.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/awesome/solid.css') }}" rel="stylesheet" />

    <script type="module" src="{{ asset('assets/css/awesome/all.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">

        <div class="menu  shadow-sm">
            <div>
                <img src="{{ asset('assets/image/logoAC.png') }}" alt="">
            </div>

            <div class="dropdown">
                <button id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </button>

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

        <div class="menuDashboard">

            <div>
                <a href="" style="text-decoration: none">
                    <div class="item">
                        <i class="fas fa-laptop-house fa-4x"></i>
                    </div>
                    <div>
                        <span class="title">Trabalhos</span>
                    </div>
                </a>
            </div>

            <div>
                <a href="{{ route('bank') }}" style="text-decoration: none">
                    <div class="item">
                        <i class="far fa-credit-card fa-4x"></i>
                    </div>
                    <div>
                        <span class="title">Pagamentos</span>
                    </div>
                </a>
            </div>

            <div>
                <a href="" style="text-decoration: none">
                    <div class="item">
                        <i class="fas fa-tools fa-4x"></i>
                    </div>
                    <div>
                        <span class="title">Ferramentas</span>
                    </div>
                </a>
            </div>

            <div>
                <a href="{{ route('profile') }}" style="text-decoration: none">
                    <div class="item">
                        <i class="far fa-user fa-4x"></i>
                    </div>
                    <div>
                        <span class="title">Meus dados</span>
                    </div>
                </a>
            </div>

        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="module" src="{{ asset('assets/css/awesome/all.js') }}"></script>
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
