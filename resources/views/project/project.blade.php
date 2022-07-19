@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('home') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
            <h3 class="text-primary">Novo projeto</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">

                    <form method="POST" action="{{ route('project.do') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nameProject" name="name" placeholder="Nome do projeto">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Criar novo projeto</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" style="color: #bfbfbf;">Descrição</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="description"></textarea>
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

            <h3 class="text-primary">Lista de projetos</h3>
            <hr>

            <div class="row">
                <div class="col-md-12">

                    <table class="table">
                        <caption>Lista de Projetos</caption>
                        <thead class="bg-info text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Projeto</th>
                            <th scope="col">Criado</th>
                            <th scope="col">Ativo</th>
                            <th scope="col">Gerenciar</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($projects as $project)
                                <tr>
                                    <th scope="row">{{ $project->id}}</th>
                                    <td>{{ strtoupper($project->name)}}</td>
                                    <td>{{ date('d/m/Y', strtotime($project->created_at))}}</td>
                                    <td>{{ $project->description}}</td>
                                    <td style="width: 240px">

                                        <div style="display: flex; justify-content: space-between">
                                            <div>
                                                <form method="GET" action="/project.edit/{{$project->id}}">
                                                    @csrf
                                                    <button class="btn bt-medium btn-primary text-white btn-sm" href="#" role="button">Editar</button>
                                                </form>
                                            </div>

                                            <div>
                                                <form method="POST" action="/project.open/{{$project->id}}">
                                                    @csrf
                                                    <button class="btn bt-medium btn-info text-white btn-sm" href="#" role="button">Abrir</button>
                                                </form>
                                            </div>

                                            <div>
                                                <form method="POST" action="/project.delete/{{$project->id}}">
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

                      <nav aria-label="Navegação de página exemplo">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Anterior">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Anterior</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Próximo">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Próximo</span>
                            </a>
                          </li>
                        </ul>
                      </nav>

                </div>
            </div>
    </div>


@endsection
