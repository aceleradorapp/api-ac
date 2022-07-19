@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('home') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
            <h3 class="text-primary">Configuração de projetos</h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-primary">Tipos de atividades de projetos</h4>
                </div>
            </div>
            <div class="container-forms shadow">
                <form method="POST" action="{{ route('projectType.do') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Adicionar Tipo de atividade</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="nome" autocomplete="off">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px; width: 100%;">Salvar</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <label for="exampleFormControlSelect2">Lista de Tipos de Atividades </label>
                                <select multiple class="form-control" id="exampleFormControlSelect2" style=" height : 120px">
                                    @foreach ($projectTypes as $projectType)
                                        <option>{{ $projectType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6">
                        <p>Clique no tipo de atividade na caixa ao lado para selecioná-la para editar ou excluir.</p>
                    </div>

                    <div class="col-md-3">
                        <label for="itemSelected">Tipo de atividade selecionada</label>
                        <input type="text" class="form-control" id="itemSelected" name="name" placeholder="Atividade" readonly>
                    </div>
                    <div class="col-md-3">
                        <div style="display: flex; justify-content: start; margin-top: 27px;">

                            <div>
                                <form method="POST" action="">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" class="form-control" id="editType" name="name" placeholder="Atividade">
                                    <button class="btn btn-info text-white btn-sm" href="#" role="button">Editar</button>
                                </form>
                            </div>

                            <div style="margin-left: 5px">
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" class="form-control" id="deletType" name="name" placeholder="Atividade">
                                    <button class="btn btn-delet btn-sm" href="#" role="button">Excluir</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </div>


@endsection
