@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('home') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header text-white bg-primary">Pagamentos </div>

                    <div class="card-body shadow-owner">
                        <form method="POST" action="{{ route('payment') }}">
                            @csrf

                            <div class="row ">
                                <label for="userS" class="col-md-2 col-form-label text-md-right">Usuário</label>
                                <div class="col-md-8">
                                    <input id="userS" type="text" class="form-control" name="name" value="" autocomplete="none">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                        Procurar
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('payment.do') }}">
                            @csrf
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                    </tr>
                              </thead>
                            </table>
                            <div style="height: 200px; border:solid 1px #ddd; border-radius:5px; overflow:scroll ">
                                <table class="table table-striped table table-hover table-sm">

                                    <tbody style="height:200px">

                                        @foreach ($users as $userTemp)
                                            <tr class="listUser" style="cursor: pointer" data-id="{{$userTemp->id}}" data-user="{{$userTemp->name}}">
                                                <th scope="row">{{$userTemp->id}}</th>
                                                <td><b>{{$userTemp->name}}</b></td>
                                                <td>{{$userTemp->email}}l</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                  </table>
                            </div>

                            <div style="margin-top:10px; padding:10px; border:solid 1px #ddd; border-radius:5px;">

                                <div class="row mb-3">
                                    <label for="nameUser" class="col-md-4 col-form-label text-md-right">Usuário</label>

                                    <div class="col-md-6">
                                        <input id="idUser" type="hidden" class="form-control" name="idUser" value="" >
                                        <input id="nameUser" type="text" class="form-control" name="nameUser" value="" readonly autocomplete="none">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="type" class="col-md-4 col-form-label text-md-right">Tipo</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="type" name="typeService">
                                            <option value="0">Tipo de serviço</option>

                                            @foreach ($projectTypes as $projectType)
                                                <option value="{{$projectType->id}}">{{$projectType->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nameProject" class="col-md-4 col-form-label text-md-right">Nome do Projeto</label>

                                    <div class="col-md-6">
                                        <input id="nameProject" type="text" class="form-control" name="nameProject" value="" autocomplete="none">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="descryption" class="col-md-4 col-form-label text-md-right">Descrição</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control" id="descryption" rows="3" name="descryption"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="valorUnit" class="col-md-4 col-form-label text-md-right">valor unitário</label>

                                    <div class="col-md-2">
                                        <input id="valorUnit" type="text" class="form-control price" value="" name="priceUnit">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="valorTotal" class="col-md-4 col-form-label text-md-right">Valor total</label>

                                    <div class="col-md-2">
                                        <input id="valorTotal" type="text" class="form-control price" value="" name="price">
                                    </div>
                                </div>

                                <hr>

                                <div class="row ">
                                    <div class="col-md-6">
                                        <button href="" id="send" class="btn btn-primary" disabled>Enviar</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var listUser = document.getElementsByClassName('listUser');
        var typeProject = document.getElementById('type');
        var button = document.getElementById('send');
        var userSelected = false;
        var type = false;

        typeProject.onchange = (e)=>{
            if(e.currentTarget.value != 0 ){
                //button.disabled  = false;
                type = true;
                liberaButton();
            }else{
               // button.disabled  = true;
                type = false;
                liberaButton();
            }
        }

        function liberaButton(){
            if(userSelected && type){
                button.disabled  = false;
            }else{
                button.disabled  = true;
            }
        }


        for(var i=0; i<listUser.length; i++){
            listUser[i].onclick = userSelect
        }

        function userSelect(e){
            var element = e.currentTarget;
            var id = element.getAttribute("data-id");
            var nameUser = element.getAttribute("data-user");

            document.getElementById('nameUser').value = nameUser;
            document.getElementById('idUser').value = id;

            userSelected = true;
            liberaButton();
        }



    </script>

@endsection
