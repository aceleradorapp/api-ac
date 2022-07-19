@extends('layouts.aapAc')

@section('content')

    <a href="{{ route('payment') }}" style="margin-left: 20px"><i class="far fa-arrow-alt-circle-left"></i> Voltar</a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header text-white bg-primary"><h4>Formulário de pagamento</h4></div>

                    <div class="card-body shadow-owner">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum dolorem ad possimus minus exercitationem iure optio expedita inventore quibusdam mollitia culpa modi distinctio quam facilis, voluptas illo? Reprehenderit, quis. Aliquid?</p>

                        <div style="width: 100%; border:solid 1px #e1e1e1; border-radius:5px; padding:5px; margin-bottom:10px">
                            <div><b>Solicitante:</b> {{ $paymentComplete['userName'] }}</div>
                            <div><b>E-mail:</b> michael@gmail.com</div>
                        </div>

                        <div style="width: 100%; border:solid 1px #e1e1e1; border-radius:5px; padding:5px; margin-bottom:10px">
                            <div><b>Nome prestador de serviço:</b> {{ $paymentComplete['userPaymentName'] }}</div>
                            <div><b>cpf:</b> {{ $paymentComplete['cpf'] }}</div>
                            <div><b>Banco:</b> {{ $paymentComplete['bankName'] }}</div>
                            <div><b>Agência:</b> {{ $paymentComplete['ag'] }}</div>
                            <div><b>Conta:</b> {{ $paymentComplete['cc'] }}</div>
                        </div>

                        <div style="width: 100%; border:solid 1px #e1e1e1; border-radius:5px; padding:5px; margin-bottom:10px">
                            <div><b>Tipo de serviço:</b> {{ $paymentComplete['TypePayment'] }}</div>
                            <b>Projeto: {{ $paymentComplete['NameProjectPayment'] }}</b>
                            <div>
                                <div style="margin-top: 10px">Descrição</div>
                                <div style="width: 100%; height:110px; border:solid 1px #e1e1e1; border-radius:5px; padding:5px; margin-bottom:10px">
                                    {{ $paymentComplete['descryptionPayment'] }}
                                </div>
                            </div>
                            <div><b>Valor unidade:</b> R${{ number_format($paymentComplete['priceUnitPayment'], 2,',',' ') }}</div>
                            <div><b>Valor total:</b> R${{ number_format($paymentComplete['pricePaymentId'], 2,',',' ') }}</div>
                        </div>

                        <div style="width: 100%; border:solid 1px #e1e1e1; border-radius:5px; padding:5px; margin-bottom:10px">
                            <div><b>Solicitado em:</b> {{ $paymentComplete['dateInit'] }}</div>
                            <div><b>data de pagamento:</b> 10/10/2022</div>
                        </div>

                        <div>
                            <button class="btn btn-primary" >Confirmar e enviar</button>
                            <button class="btn btn-delet text-white" >Cancelar</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
