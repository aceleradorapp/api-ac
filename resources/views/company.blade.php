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
                            <h1 class="hide-mobile" style="text-align: center;">Seja um parceiro.</h1>                         
                        </div>
                    </div>            

                </div>
            </div>            
        </div>
        
        <div class="content-tools">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hide-desktop" style="text-align: center; font-family: Calibri !important;">Aceleradora de Conteúdo</h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/image/company.png') }}" alt="" class="logo-more">
                    </div>
                    <div class="col-md-8">
                        <h1 class="hide-mobile">Aceleradora de Conteúdo</h1>
                        <p style="opacity:0.7; font-size: 18px; color: black;">
                            Desenvolvido para facilitar e aumentar a produção de materiais que serão usados para criar conteúdo interativos personalizados e exclusivos. Este material pode ser disponibilizado para empresas do ramo, como base para o desenvolvimento do conteúdo interativo, ou como um produto final de interação.
                            O sistema oferece uma API de comunicação para as empresas parceiras terem acesso aos recursos oferecidos pela plataforma e dentre outras as opções. Nela é disponibilizado um player especialmente desenvolvido para executar as interações, mantendo a segurança e a exclusividade do material.
                            Além disso, é oferecido uma área de dados voltado ao desenvolvimento de produção do material, com isso, a empresa poderá acompanhar as etapas de produção, o tempo de desenvolvimento, as equipes que estão envolvidas e as datas de entrega. 
                            A empresa parceira, além de acompanhar todo este processo, também conseguirá visualizar o material e testar partes separadas do que já estiver desenvolvido.
                            Quando contratado para criar material base para a produção interna, a empresa terá acesso a todo o conteúdo desenvolvido em uma área exclusiva, onde ela mesma controlará o download de cada material. Mas, se a empresa optar pelo produto final, ela poderá escolher como publicar o conteúdo, e entre as opções estão:
                            1-	A publicação no portal Aceleradora de Conteúdo, onde ela receberá um link de acesso temporário para cada requisição com autenticação.
                            2-	Receber o conteúdo por meio da API, o player, os dados e o conteúdo para exibição no seu próprio site ou portal.
                            3-	Baixar o material completo em html para publicação na hospedagem contratada.
                            4-	Realizar o download do conteúdo completo off-line, para instalar e executar localmente no sistema operacional, pode-se disponibilizar esse conteúdo diretamente pela rede interna da empresa.
                            Além de todos os serviços citados, a empresa terá acesso ao portal Aceleradora de Conteúdo, onde encontrará muitas outras opções, um painel de controle e um dashboard na área exclusiva para a empresa.

                        </p>
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
