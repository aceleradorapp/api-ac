@extends('layouts.aapAC')

@section('content')
<a href="{{ route('home') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Usuários</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead class="bg-info text-white">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Criado na data</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $userTemp)
                        {{-- {{ dd($userTemp->person()->get()->first()->type) }} --}}
                            <tr>
                                <th scope="row">{{ $userTemp->id }}</th>
                                <td>{{ $userTemp->name }}</td>
                                <td>{{ $userTemp->isCompany == 1?'Empresa':'Usuário' }}</td>
                                {{-- <td>{{ $userTemp->person()->get()->first()}}</td> --}}
                                <td>{{ $userTemp->email}}</td>
                                <td>{{ date('d/m/Y', strtotime($user->created_at))}}</td>
                                <td style="width: 240px">

                                    <div style="display: flex; justify-content: space-between">
                                        <div>
                                            <form method="GET" action="/project.edit/{{$user->id}}">
                                                @csrf
                                                <button class="btn bt-medium btn-primary text-white btn-sm" href="#" role="button">Editar</button>
                                            </form>
                                        </div>

                                        <div>
                                            <form method="POST" action="/project.open/{{$user->id}}">
                                                @csrf
                                                <button class="btn bt-medium btn-info text-white btn-sm" href="#" role="button">Abrir</button>
                                            </form>
                                        </div>

                                        <div>
                                            <form method="POST" action="/project.delete/{{$user->id}}">
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
                      {{ $listData =  $users}}
                    <ul class="pagination">
                      <li class="page-item {{$listData->currentPage()== 1 ? 'disabled':''}}" >
                        <a class="page-link" href="{{ $listData->path().'?page='.$listData->currentPage()-1}}" aria-label="Anterior">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Anterior</span>
                        </a>
                      </li>

                      @for ($i = 0; $i < $listData->lastPage(); $i++)
                        <li class="page-item {{ $listData->currentPage() == $i+1 ? 'active' : '' }}"><a class="page-link" href="{{ $listData->path().'?page='.$i+1}}">{{$i+1}}</a></li>
                      @endfor

                      <li class="page-item {{$listData->currentPage()==$listData->lastPage() ? 'disabled':''}}">
                        <a class="page-link" href="{{ $listData->path().'?page='.$listData->currentPage()+1}}" aria-label="Próximo">
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
