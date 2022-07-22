<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AC</title>

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
                                <div class="btn-menu ">Empresas</div>
                                <div class="btn-menu ">Contato</div>
                            </div>
                            <div class="item">
                                <div class="btn-menu">Entrar</div>                                
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
                            <p class="text-destac">Aceleradora de conteúdo é formada por uma equipe treinada para desenvolvimento de material interativo, usamos uma série de ferramentas que auxiliam no desenvolvimento do material interativo e aumenta a produtividade, criando conteúdo com qualidade e rapidez.</p>
                            <p>Faça parte de nossa equipe.</p>
                            <a href="{{ url('registration') }}" class="btn-menu btn-destac">Quero fazer parte da equipe</a>
                            <a href="{{ url('more') }}" class="btn-menu">Saiba mais</a>                            
                        </div>
                    </div>            

                </div>
            </div>            
        </div>
        
        <div class="content-tools">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Nossas ferramentas</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/videoCapture.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                            <span>Xtool Create</span>
                            <div class="text-tool">  
                                Xtoon Create ferramenta que auxilia na criação do material em mídia para produção de conteúdo interativo.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/roteiro.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span>Xtool Script</span>
                            <div class="text-tool">                                
                                Xtoon Script, ferramenta para criação de conteúdo escrito, roteiros, facilitando e aumentando a produção do material.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                        <img src="{{ asset('assets/image/project-logo.png') }}" class="" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                        <span>Xtool Production</span>
                            <div class="text-tool">                                
                                Xtoon Production, ferramenta de suporte para criação mídias para produção de conteúdo interativo.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/tool-simulation.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span>Xtool Simulation</span>
                            <div class="text-tool">                                
                                Xtoon Simulation ferramenta de autoria para criação de animações, simulação e vídeo simulado.
                            </div>
                        </div>
                    </div> 
                </div>                
            </div>
        </div>

        <div class="container">

        </div>

        <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <!-- <img src="{{ asset('assets/image/logoAC.png') }}" class="hide-mobile" alt="" style="width:5%; margin-top: 30px;"> -->
                            <div class="footer-item">
                                <a href="" class="btn-menu">Empresa</a>
                                <a href="" class="btn-menu">Contato</a>
                                <a href="" class="btn-menu">Cadastro</a>
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
