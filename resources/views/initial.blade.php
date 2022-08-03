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
                                <div class="btn-menu ">Empresas</div>
                                <div class="btn-menu ">Contato</div>
                            </div>
                            <div class="item">
                                <a href="{{ route('login') }}" class="btn-menu">Entrar</a>                                
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
                            
                            <p class="text-destac">Aceleradora de conteúdo foi criado com o objetivo de aumentar a demanda de materiais interativos com maior qualidade e rapidez.</p>
                            <p class="hide-mobile">Entre na sessão empresas e <a href="" style="color:#fff"><b>descubra mais.</b></a>.</p>                            
                            <br><br>
                            <p style="margin-left:5px">Faça parte de nossa equipe.</p>
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
                        <h1>XTools Collection</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/videoCapture.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-create.png') }}" class="" alt="">                              
                            <span>Xtool Create</span>
                            <div class="text-tool">  
                                Criação de mídias em vídeo 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/roteiro.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-script.png') }}" class="" alt="">
                            <span style="color:#004f91 !important">Xtool Script</span>
                            <div class="text-tool">                                
                                Elaboração de roteiros 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                        <img src="{{ asset('assets/image/project-logo.png') }}" class="" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-production.png') }}" class="" alt="">                              
                        <span style="color:#bf0aa8 !important">Xtool Production</span>
                            <div class="text-tool">                                
                                Suporte ao produtor de mídia final 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/tool-simulation.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-simulation.png') }}" class="" alt="">
                            <span style="color:#dc0c0c !important">Xtool Simulation</span>
                            <div class="text-tool">                                
                                Simulador de software 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <p class="text-destac-xtools">A Xtolls é uma coleção aplicativos e serviços para desktop, dispositivos móveis e também disponível on-line no portal Aceleradora de conteúdo. São ferramentas para criação de material interativo, simulações, experiência do usuário e muito mais.</p>
                        <p class="text-destac-xtools">Agora você pode dar vida as suas idéias!</p>
                    </div>
                </div>                
            </div>
        </div>

        <div class="container">
            <div class="xtool">                
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-info">
                            <img class="" src="{{ asset('assets/image/xtools-banner.png') }}" class="" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-create.png') }}" class="" alt="">
                            <span class="item-xtool">Xtool Create</span>
                            <div class="text-tool text-destac-1 text-destac-orange">                                
                                Com está ferramenta é possível criar mídias em vídeo, e por meio dela é possível capturar telas, realizar edições, criar marcações, as quais serão utilizadas pelas outras etapas do processo para que seja feita a produção dos roteiros e das mídias.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-script.png') }}" class="" alt="">
                            <span class="item-xtool" style="color:#004f91 !important">Xtool Script</span>
                            <div class="text-tool text-destac-1 text-destac-blue">                                
                                Responsável pela criação de roteiros, os quais devem ser baseados nas mídias em vídeos. Com a sua utilização a produção ficará mais rápida e fácil, pois essa ferramenta nos permite visualizar o conteúdo base, ou seja, os textos ordenados de acordo com a mídia em vídeo, e ao mesmo tempo conseguimos visualizar a interação em vídeo. Aqui o editor consegue acompanhar em tempo real cada passo desta interação, com o suporte do conteúdo básico e informações que ajudarão a escrever o roteiro.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-production.png') }}" class="" alt="">
                            <span class="item-xtool" style="color:#bf0aa8 !important">Xtool Protudion</span>
                            <div class="text-tool text-destac-1 text-destac-purple">                                
                                Por meio desta ferramenta é possível capturar imagens e também sequências de imagens. Além disso, podemos criar, capturar e gerar vídeos e criar simulações de software utilizando as mídias que foram geradas pelo aplicativo Create. Ao terminar o produtor consegue gerar o conteúdo final exportando para os formatos de pacote de publicação web e local e em mídia para outros sistemas de autoria.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt-simulation.png') }}" class="" alt="">
                            <span class="item-xtool" style="color:#dc0c0c !important">Xtool Simulation</span>
                            <div class="text-tool text-destac-1 text-destac-red">                                
                                Fazendo uso dessa ferramenta podemos criar simulações de software, desenvolver animações e realizar edição de áudio e vídeo. Além disso, o produtor consegue gerar o conteúdo final exportando para os formatos de pacote de publicação web e local, publicar no portal e em mídia para outros sistemas de autoria.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>

        <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <!-- <img src="{{ asset('assets/image/logoAC.png') }}" class="hide-mobile" alt="" style="width:5%; margin-top: 30px;"> -->
                            <div class="footer-item">
                                <!-- <a href="" class="btn-menu hide-mobile">Empresa</a>
                                <a href="" class="btn-menu hide-mobile">Contato</a>
                                <a href="{{ url('registration') }}" class="btn-menu">Cadastro</a> -->
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
