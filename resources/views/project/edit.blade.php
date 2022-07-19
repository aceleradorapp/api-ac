@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('project') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
            <h3 class="text-primary">Editar projeto</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">

                    <form method="POST" action="/project.put/{{$project->id}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nameProject" name="name" value="{{ $project->name }}">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Editar projeto</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" style="color: #bfbfbf;">Descrição</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="description">{{ $project->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 background-cyan">
                    <div class="jumbotron" style="margin: 5px">
                        <h1 class="display-4 text-primary">Olá, {{$nameUser['name']}}!</h1>
                        <p class="lead">Nesta área você pode criar novos projetos e gerenciar todo os existentes, editanto, excluindo ou alterando as informações.</p>

                        <hr class="my-4">
                        <p>Em caso de dúvidas, ou quer saber mais sobre essa funcionalidade, clique no botão saiba mais.</p>
                        <a class="btn btn-primary text-white btn-sm" href="#" role="button">Saiba mais</a>
                    </div>
                </div>
            </div>
    </div>


@endsection
