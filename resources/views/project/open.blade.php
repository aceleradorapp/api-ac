@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('project') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3>Atividades do projeto : {{ $project->name }}</h3>
                    <hr>
                    <table class="table">
                        <thead class="bg-info text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Atividade</th>
                            <th scope="col">Type de atividade</th>
                            <th scope="col">Descrição</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($dataContents as $dataContent)
                                <tr>
                                    <th scope="row">{{ $dataContent->id}}</th>
                                    <td>{{ $dataContent->name}}</td>
                                    <td>{{ $dataContent->project_types()->first()->name}}</td>
                                    <td>{{ $dataContent->description}}</td>
                                    <td style="width: 240px">

                                        <div style="display: flex; justify-content: space-between">
                                            <div>
                                                <form method="GET" action="">
                                                    @csrf
                                                    <button class="btn bt-medium btn-primary text-white btn-sm" href="#" role="button">Editar</button>
                                                </form>
                                            </div>

                                            <div>
                                                <form method="POST" action="">
                                                    @csrf
                                                    <button class="btn bt-medium btn-info text-white btn-sm" href="#" role="button">Abrir</button>
                                                </form>
                                            </div>

                                            <div>
                                                <form method="POST" action="">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn bt-medium btn-delet btn-sm" href="#" role="button">Excluir</button>
                                                </form>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>

                </div>
            </div>

    </div>


@endsection
