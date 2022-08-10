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
                    <div class="col-md-4 space-logo-page">
                        <div class="logo-init">
                            <img src="{{ asset('assets/image/logoAC.png') }}" class="" alt="" style="width:30%">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content">                                                        
                            <h1 class="hide-mobile" style="text-align: center;">Faça parte da nossa equipe de produção!</h1>                         
                        </div>
                    </div>            

                </div>
            </div>            
        </div>
        
        <div class="content-tools">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hide-desktop" style="text-align: center;">Faça parte da nossa equipe de produção</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center--">
                    <div class="col-md-6">                        
                        <img src="{{ asset('assets/image/loco-register.png') }}" alt="" class="logo-register">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome completo') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
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

                                <div class="row mb-3">
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

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">                                    
                                        <button type="submit--" class="btn-menu btn-destac" style="color: #ffffff !important; background-color: #ff9544 !important;">
                                            {{ __('Cadastrar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div >
                            <p>
                                Assim que concluir o cadastro em nosso portal, receberá um e-mail em sua caixa de mensagem para comprovação de sua conta. 
                                Após, realizar este processo você já estará fazendo parte a nossa equipe aceleradora de conteúdo. Seja muito bem-vindo!
                            </p>
                        </div>
                    </div>                    
                </div>  
                
            </div>
            <br><br><br><br><br>
        </div>        

        <div class="gradient footer-fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <!-- <img src="{{ asset('assets/image/logoAC.png') }}" class="hide-mobile" alt="" style="width:5%; margin-top: 30px;"> -->
                            <div class="footer-item">
                              
                            </div>
                        </div>
                    </div> 
                </div>                
            </div>
        </div>       

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    </body>
</html>
