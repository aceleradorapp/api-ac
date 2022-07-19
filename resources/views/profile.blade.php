@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 shadow" style="background-color: #fff">
            <form method="POST" action="{{ route('profile.do') }}">
                @csrf
                <div class="form-group">
                  <label for="email-contact">Email para contato</label>
                  <input type="email" class="form-control" id="email-contact" name="email" value="{{ $nameUser['email'] }}" placeholder="nome@exemplo.com">
                </div>

                @if ($user->isCompany == true)
                    <div class="form-group">
                    <label for="type-person">Pessoa tipo</label>
                    <select class="form-control" id="type-person" name="type-person" disabled>
                        <option value="F">Pessoa Física</option>
                        <option value="J" {{ $user->isCompany == true? 'selected':'' }}>Pessoa Jurídica</option>
                    </select>
                    </div>
                @endif

                @if ($user->isCompany == false)
                    <div id="pessoaFisica">
                        <div class="row">
                            <div class="form-group col">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $nameUser['name'] }}">
                            </div>
                            <div class="form-group col">
                                <label for="lastName">Sobrenome</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Sobrenome" value="{{ $nameUser['lastName'] }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="___.___.___-__">
                            </div>
                            <div class="form-group col">
                                <label for="birtDate">Data de nascimento</label>
                                <input type="date" class="form-control date" id="birtDate" name="birtDate" placeholder="__/__/____" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profession">Profissão</label>
                            <input type="text" class="form-control" id="profession" name="profession" placeholder="Sua profição">
                        </div>
                    </div>
                @endif

                @if ($user->isCompany == true)
                    <div id="pessoaJuridica">
                        <div class="form-group">
                            <label for="nameCompany">Nome</label>
                            <input type="text" class="form-control" id="nameCompany" name="name" placeholder="Nome da empresa">
                        </div>
                        <div class="form-group">
                            <label for="fatazyName">Nome fantasia</label>
                            <input type="text" class="form-control" id="fatazyName" name="fatazyName" placeholder="Nome fantasia">
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" class="form-control cnpj" id="cnpj" name="cnpj" placeholder="__.___.___/____-__">
                            </div>
                            <div class="form-group col">
                                <label for="businessActive">Ramo de atividade</label>
                                <input type="text" class="form-control" id="businessActive" name="businessActive" placeholder="Atividade">
                            </div>
                            <div class="form-group col">
                                <label for="registrationDate">Data de registro</label>
                                <input type="date" class="form-control date" id="registrationDate" name="registrationDate" placeholder="__/__/____" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                            </div>
                        </div>
                    </div>
                @endif

                <div id="street-form" >
                    <div class="row">
                        <div class="form-group col">
                            <label for="street">Rua</label>
                            <input type="text" class="form-control" id="street" name="street" placeholder="Nome da rua">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="number">Número</label>
                            <input type="number" class="form-control number" id="number" name="number" placeholder="numero">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="complement">Complemento</label>
                            <input type="text" class="form-control" id="complement" name="complement" placeholder="Ex: fundo">
                        </div>
                        <div class="form-group col">
                            <label for="district">Bairro</label>
                            <input type="text" class="form-control" id="district" name="district" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="state">Estado</label>
                            <input type="text" class="form-control" id="state" name="state">
                        </div>
                        <div class="form-group col">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zipCode">CEP</label>
                            <input type="text" class="form-control zipCode" id="zipCode" name="zipCode" placeholder="__.___-___">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Phone">Celular</label>
                            <input type="tel" class="form-control tel" id="phone" name="phone" placeholder="(__)___-______">
                        </div>
                    </div>
                </div>

                @if ($user->isCompany == false)
                    {{-- <div id="listAtividade"> --}}
                        <h4>Escolha suas atividades</h4>
                        <div class="row justify-content-between">
                            @foreach ($types as $type)
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="{{$type->id}}" id="{{'check'.$type->id}}" name="listType[]">
                                        <label class="form-check-label" for="{{'check'.$type->id}}">
                                            {{ ucfirst($type->name) }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    {{-- </div> --}}
                @endif

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                    </div>
                </div>

              </form>

              <br>



        </div>
    </div>
</div>

@endsection
