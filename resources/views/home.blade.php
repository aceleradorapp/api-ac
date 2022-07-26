@extends('layouts.appAcUser')

@section('content')

    <div class="container">

        <div class="row my-5">
            <div class="col ">
                {{-- <h3 class="text-primary">Ferramentas</h3> --}}
            </div>
        </div>

        <div class="row ">
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

    </div>

@endsection
