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
                            <p class="text-destac">Aceleradora de conteúdo foi criada com intuito de proporcionar conteúdos interativos com qualidade e agilidade na entrega. Formada por uma equipe capacitada, conseguimos atender todas as necessidades que você procura.</p>
                            <p>Entre na sessão empresas e descubra mais.</p>
                            <br><br>
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
                                Mídia de suporte para roteiros.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/roteiro.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span>Xtool Script</span>
                            <div class="text-tool">                                
                                Roteiros.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                        <img src="{{ asset('assets/image/project-logo.png') }}" class="" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                        <span>Xtool Production</span>
                            <div class="text-tool">                                
                                Mídia de suporte para produção.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 space-vertical-item">
                        <div class="item-tool">
                            <img src="{{ asset('assets/image/tool-simulation.png') }}" class="" alt="">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span>Xtool Simulation</span>
                            <div class="text-tool">                                
                                Simulações e midia interativa.
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
                            <img class="" src="{{ asset('assets/image/logo-800x800-xt.png') }}" class="" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span class="item-xtool">Xtool Create</span>
                            <div class="text-tool">                                
                                Aplicativo desenvolvido para criação de mídias de suporte que será utilizado para desenvolver o roteiro do conteúdo interativo. Com ele é possível criar vídeos, legendas, adicionar comentários de auxílio e exportar o pacote de produção.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span class="item-xtool">Xtool Script</span>
                            <div class="text-tool">                                
                                Aplicativo desenvolvido para criar os roteiros do conteúdo interativo, facilitando o desenvolvimento com rapidez e qualidade do material. Nele é possível criar as legendas, editar, remover ou alterar a posição delas. Tudo o trabalho de edição do roteiro com o suporte de imagens e vídeos de apoio ao material que será desenvolvido.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span class="item-xtool">Xtool Protudion</span>
                            <div class="text-tool">                                
                                Aplicativo para criação de mídia interativa de forma rápida, intuitiva e organizada.Esta ferramenta permite exportar o conteúdo no formato desejado para diversos fins, exportar para aplicativos de autoria, aplicativos de apresentação, vídeo e formatos específicos contratados por nossos parceiros.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="xtool-card">
                            <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                            <span class="item-xtool">Xtool Simulation</span>
                            <div class="text-tool">                                
                                Aplicativo desenvolvido para criação de conteúdo interativo e vídeo interativo. Com ele é possível criar apresentações, quis, animações, treinamentos. Também é possível compilar em diversos formatos, pacote de publicação web, pacote de publicação local, ou publicar em nosso portal onde será gerado um link para acesso do conteúdo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <!-- <img src="{{ asset('assets/image/logoAC.png') }}" class="hide-mobile" alt="" style="width:5%; margin-top: 30px;"> -->
                            <div class="footer-item">
                                <a href="" class="btn-menu hide-mobile">Empresa</a>
                                <a href="" class="btn-menu hide-mobile">Contato</a>
                                <a href="{{ url('registration') }}" class="btn-menu">Cadastro</a>
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
