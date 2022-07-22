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
                            <h1 class="hide-mobile" style="text-align: center;">Seja um colaborador e junte-se nós.</h1>                         
                        </div>
                    </div>            

                </div>
            </div>            
        </div>
        
        <div class="content-tools">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hide-desktop" style="text-align: center; font-family: Calibri !important;">Junte-se a nós.</h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/image/junte-se.png') }}" alt="" class="logo-more">
                    </div>
                    <div class="col-md-6">
                        <h1 class="hide-mobile">Como fazer parte de nossa equipe</h1>
                        <p style="opacity:0.7; font-size: 18px">Oferecemos treinamentos para as pessoas que gostariam de fazer parte da nossa equipe de produção interativa e isso poder ser uma boa opção de remuneração trabalhando totalmente no conforte de sua casa.
                            Para fazer parte da nossa equipe, primeiro é necessário criar um conta no portal para ter acesso ao nosso conteúdo.
                            Feito isso, será liberado um treinamento onde conhecerá todo o processo de criação dos conteúdos, detalhando cada etapa e o uso dos aplicativos.
                            Conhecendo todo o processo, poderá escolher qual ou quais etapas o seu perfil atende e fazer os treinamentos com os aplicativos usados nas etapas escolhidas.
                            Realizado estas etapas pode solicitar materiais para trabalhar no próprio site.
                        </p>
                        <a href="{{ url('registration') }}" class="btn-menu" style="color: #ffffff !important; background-color: #ff9544 !important;">
                            Criar minha conta
                        </a>
                    </div>                    
                </div>                
            </div>
        </div>

        <div class="gradient footer-fixed">
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
        <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    </body>
</html>
