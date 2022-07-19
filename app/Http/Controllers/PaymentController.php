<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\payment\Payment;
use App\Models\ProjectType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;
        $projectTypes = ProjectType::All();

        return view('payment.payment', [
            'nameUser' => $nameUser,
            'user' => $user,
            'users' => $users,
            'projectTypes' => $projectTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;
        $paymentComplete = [];
        $bank = Bank::where('user_id', $request->idUser)->first();
        $projectType = ProjectType::where('id', $request->typeService)->first();

       // dd($request->typeService);

        if(!$bank){
            // retornar mensagem q usuário não possui conta no banco
        }

        $paymentComplete['userId'] = $user->id;
        $paymentComplete['userName'] = $user->name;
        $paymentComplete['userPaymentId'] = $request->idUser;
        $paymentComplete['userPaymentName'] = $request->nameUser;
        $paymentComplete['TypePaymentId'] = $projectType->id;
        $paymentComplete['TypePayment'] = $projectType->name;
        $paymentComplete['NameProjectPayment'] = $request->nameProject;
        $paymentComplete['descryptionPayment'] = $request->descryption;
        $paymentComplete['priceUnitPayment'] = $request->priceUnit;
        $paymentComplete['pricePaymentId'] = $request->price;
        $paymentComplete['cpf'] = $bank->cpf;
        $paymentComplete['bankNumber'] = $bank->numberBank;
        $paymentComplete['bankName'] = $bank->bank;
        $paymentComplete['ag'] = $bank->ag;
        $paymentComplete['cc'] = $bank->cc;
        $paymentComplete['cpf'] = $bank->cpf;
        $paymentComplete['dateInit'] = date("d/m/Y");

        //dd($paymentComplete);

        return view('payment.paymentResult', [
            'nameUser' => $nameUser,
            'user' => $user,
            'paymentComplete' => $paymentComplete

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = Auth::user();
        $users = User::where("name", "like", "%". $request->name ."%")->get();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;
        $projectTypes = ProjectType::All();


        //dd($users);

        return view('payment.payment', [
            'nameUser' => $nameUser,
            'user' => $user,
            'users' => $users,
            'projectTypes' => $projectTypes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    private function getLastNameCommaFirstName($fullName) {
        $names = explode(' ', $fullName);
        $firstName = $names[0];
        $lastName = str_replace($firstName, '', $fullName) ;
        return ['name'=>$firstName, 'lastName'=>$lastName];
    }
}
