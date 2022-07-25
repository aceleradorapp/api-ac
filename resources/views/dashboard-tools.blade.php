@extends('layouts.appDashboard')

@section('content') 
                                                                   
        
    <div class="content-tools">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                        <img src="{{ asset('assets/image/videoCapture.png') }}" class="disable-click" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                        <span>Xtool Create</span>
                        <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x disable-click"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                        <img src="{{ asset('assets/image/roteiro.png') }}" class="disable-click" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                        <span>Xtool Script</span>
                        <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x disable-click"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                    <img src="{{ asset('assets/image/project-logo.png') }}" class="disable-click" alt="">
                    <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                    <span>Xtool Production</span>
                    <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x disable-click"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                        <img src="{{ asset('assets/image/tool-simulation.png') }}" class="disable-click" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                        <span>Xtool Simulation</span>
                        <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x disable-click"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x disable-click"></i></a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <p style="font-size:20px">Olá, Sua conta ainda é de <b>visitante</b>, por este motivo não tem permissões para acessar algumas funcionalidades do site ou fazer download das ferramentas. Assim que sua conta for verificada e validada receberá um aviso em sua conta de e-mail com a liberação de acesso.</p>
                </div>
            </div>                
        </div>
    </div>
        
@endsection