@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('home') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>


        @if(!$bank->id)
            <div class="row justify-content-center">
                <div class="col-md-5">

                    <div class="card">
                        <div class="card-header text-white bg-primary">Dados bancários </div>

                        <div class="card-body shadow-owner">
                            <form method="POST" action="{{ route('bank.do') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>

                                    <div class="col-md-6">
                                        <input id="cpf" type="text" class="form-control" name="cpf" value="{{ $person_physical->cpf }}" placeholder="___.___.___-__">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="bank" class="col-md-4 col-form-label text-md-right">Banco</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="bank" name = 'bank'>
                                            <option value="001">Banco do Brasil S.A.</option>
                                            <option value="033">Banco Santander (Brasil) S.A.</option>
                                            <option value="104">Caixa Econômica Federal</option>
                                            <option value="237">Banco Bradesco S.A.</option>
                                            <option value="341">Banco Itaú S.A.</option>
                                            <option value="356">Banco Real S.A. (antigo)</option>
                                            <option value="389">Banco Mercantil do Brasil S.A.</option>
                                            <option value="399">HSBC Bank Brasil S.A. – Banco Múltiplo</option>
                                            <option value="422">Banco Safra S.A.</option>
                                            <option value="453">Banco Rural S.A.</option>
                                            <option value="633">Banco Rendimento S.A.</option>
                                            <option value="652">Itaú Unibanco Holding S.A.</option>
                                            <option value="745">Banco Citibank S.A.</option>
                                            <option value="260">Nubank</option>



                                          </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="numberBank" class="col-md-4 col-form-label text-md-right">Numero do banco</label>

                                    <div class="col-md-6">
                                        <input id="numberBank" type="text" class="form-control" name="numberBank" value="{{ $bank->numberBank }}" autofocus>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ag" class="col-md-4 col-form-label text-md-right">Agência</label>

                                    <div class="col-md-6">
                                        <input id="ag" type="text" class="form-control" name="ag" value="{{ $bank->ag }}" autofocus>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="cc" class="col-md-4 col-form-label text-md-right">Conta corrente</label>

                                    <div class="col-md-6">
                                        <input id="cc" type="text" class="form-control" name="cc" value="{{ $bank->cc }}" autofocus>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="pix" class="col-md-4 col-form-label text-md-right">PIX</label>

                                    <div class="col-md-6">
                                        <input id="pix" type="text" class="form-control" name="pix" value="{{ $bank->pix }}" autofocus>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Salvar
                                        </button>
                                        <a href="#" class="btn btn-primary">
                                            Editar
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        @else

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="margin: 5px 0">
                            <h2 class="text-primary">Meus Pagamentos</h2>
                            <button class="btn btn-primary">Editar meus dados bancário</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="bg-info text-white">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Serviço</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Data de solicitação</th>
                                <th scope="col">Data pagamento</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><a href="">Vídeo aula 10</a></td>
                                <td>R$ 150,00</td>
                                <td>10/10/2020</td>
                                <td>__/__/____</td>
                                <td style="color:#00C900; font-weight: bold;">Aguardando!</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>

                {{-- <nav aria-label="Navegação de página exemplo">
                    {{ $listData =  $payments}}
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
                </nav> --}}

            </div>

        @endif
            <script>
                var bank = document.getElementById('bank');
                bank.value = '{{$bank->numberBank }}';

                bank.addEventListener('change', projectHandler);

                function projectHandler(e){
                    var value = bank.options[bank.selectedIndex].value;

                    document.getElementById('numberBank').value = value;
                }
            </script>
@endsection
