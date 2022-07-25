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
                                <a href="{{ url('/') }}" class="btn-menu">Voltar</a>
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
                        <div class="content card-login">
                            
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button> -->
                                <button type="submit" class="btn-menu btn-destac" style="color: #ffffff !important; background-color: #ff9544 !important;">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #ffffff !important;">
                                        {{ __('esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                                     
                        </div>
                    </div>            

                </div>
                <div class="row">
                    <p class="hide-desktop" style="padding: 20px; color:#fff">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit vero reprehenderit iusto possimus unde ipsa optio distinctio fuga natus voluptatem eligendi, quia commodi alias ut consectetur minima quo culpa. Temporibus.</p>
                </div>
            </div>            
        </div>

        <div class="gradient footer-fixed" style="position:fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <!-- <img src="{{ asset('assets/image/logoAC.png') }}" class="hide-mobile" alt="" style="width:5%; margin-top: 30px;"> -->
                            <div class="footer-item">
                                <a href="" class="btn-menu hide-mobile">Empresa</a>
                                <a href="" class="btn-menu hide-mobile">Contato</a>
                                <a href="{{ url('registration') }}" class="btn-menu hide-mobile">Cadastro</a>
                            </div>
                        </div>
                    </div> 
                </div>                
            </div>
        </div> 


        

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
