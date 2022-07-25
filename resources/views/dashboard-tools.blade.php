@extends('layouts.appdashboard')

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
                        <img src="{{ asset('assets/image/videoCapture.png') }}" class="" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                        <span>Xtool Create</span>
                        <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                        <img src="{{ asset('assets/image/roteiro.png') }}" class="" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                        <span>Xtool Script</span>
                        <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                    <img src="{{ asset('assets/image/project-logo.png') }}" class="" alt="">
                    <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">                              
                    <span>Xtool Production</span>
                    <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 space-vertical-item">
                    <div class="item-tool">
                        <img src="{{ asset('assets/image/tool-simulation.png') }}" class="" alt="">
                        <img class="img-logo" src="{{ asset('assets/image/logo-pequeno-xt.png') }}" class="" alt="">
                        <span>Xtool Simulation</span>
                        <p style="width:100%; text-align:center">Escolha seu sistema operacional</p>
                        <div class="download-tool">  
                            <a href=""><i class="fab fa-windows fa-3x"></i></a>
                            <a href=""><i class="fab fa-linux fa-3x"></i></a>
                            <a href=""><i class="fab fa-apple fa-3x"></i></a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    
                </div>
            </div>                
        </div>
    </div>
        
@endsection