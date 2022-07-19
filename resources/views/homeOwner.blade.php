@extends('layouts.aapAc')

@section('content')

   <div class="container">
        <div class="row">
            <div class="col">
                <h3>Dashboard Owner</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Projetos</h5>
            </div>
        </div>
        <div class="row background-cyan">
            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-primary">Projetos</div>
                     <div class="card-body">
                        <h5 class="card-title">Criar projetos</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/project-logo.png') }}" alt="Imagem de capa do card">
                        <a href="{{ route('project') }}" class="btn btn-sm btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-nuancy">Projetos</div>
                    <div class="card-body">
                        <h5 class="card-title">Configurações de projetos</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/project-config-logo.jpg') }}" alt="Imagem de capa do card">
                        <a href="{{ route('project.config') }}" class="btn btn-sm text-white btn-nuancy">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-info">Projetos</div>
                    <div class="card-body">
                        <h5 class="card-title">Sistema de treinamento</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/training-logo.png') }}" alt="Imagem de capa do card">
                        <a href="#" class="btn btn-sm btn-info text-white">Acessar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5>Usuários</h5>
            </div>
        </div>
        <div class="row background-cyan">
            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-primary">Usuários</div>
                     <div class="card-body">
                        <h5 class="card-title">Usuários</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/usuarios.png') }}" alt="Imagem de capa do card">
                        <a href="{{ route('user') }}" class="btn btn-sm btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-nuancy">Usuários</div>
                    <div class="card-body">
                        <h5 class="card-title">Configurações de usuários</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/users-logo.png') }}" alt="Imagem de capa do card">
                        <a href="#" class="btn btn-sm text-white btn-nuancy">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-info">Usuários</div>
                    <div class="card-body">
                        <h5 class="card-title">Sistema de treinamento</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/training-logo.png') }}" alt="Imagem de capa do card">
                        <a href="#" class="btn btn-sm btn-info text-white">Acessar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5>Ferramentas</h5>
            </div>
        </div>
        <div class="row background-cyan">
            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-primary">Ferramentas</div>
                    <div class="card-body">
                        <h5 class="card-title">Construct</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/tool-construct.png') }}" alt="Imagem de capa do card">
                        <a href="{{env(key: 'URL_CONSTRUCT')}}" class="btn btn-sm btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-nuancy">Ferramentas</div>
                    <div class="card-body">
                        <h5 class="card-title">Video capture</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/videoCapture.png') }}" alt="Imagem de capa do card">
                        <a href="" class="btn btn-sm text-white btn-nuancy">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-info">Ferramentas</div>
                    <div class="card-body">
                        <h5 class="card-title">Roteiros</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/roteiro.png') }}" alt="Imagem de capa do card">
                        <a href="#" class="btn btn-sm btn-info text-white">Acessar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row background-cyan" style="margin-top: -10px;">
            <div class="col-md-4 center-col">
                <div class="card bg-light shadow-owner" style="max-width: 18rem;">
                    <div class="card-header text-white bg-primary">Ferramentas</div>
                    <div class="card-body">
                        <h5 class="card-title">Pagamentos</h5>
                        <img class="card-img-top" src="{{ asset('assets/image/payments.png') }}" alt="Imagem de capa do card">
                        <a href="{{ route('payment') }}" class="btn btn-sm btn-primary">Acessar</a>
                    </div>
                </div>
            </div>


        </div>

   </div>


@endsection
