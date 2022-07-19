<?php

namespace App\Http\Controllers;

use App\Models\Banck;
use App\Models\Bank;
use App\Models\Person;
use App\Models\Person_physical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BanckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;

        $person = Person::where('user_id', $user->id)->first();
        $person_physical = Person_physical::where('id', $person->person_physical_id)->first();

        //$bank = new Bank();
        $bank = Bank::where('user_id', $user->id)->first();

        $payments = [1,2,3,4,5];

        if(!$bank){
            $bank = new Bank();
        }



        return view('bank.bank', [
            'nameUser' => $nameUser,
            'user' => $user,
            'person_physical' => $person_physical,
            'bank'=> $bank,
            'payments'=>$payments
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
        $bank = Bank::where('user_id', $user->id)->first();

        if(!$bank){
            $bank = new Bank();
        }

        $bank['user_id'] = $user->id;
        $bank['cpf'] = $request->cpf;
        $bank['bank'] = $request->bank;
        $bank['numberBank'] = $request->numberBank;
        $bank['ag'] = $request->ag;
        $bank['cc'] = $request->cc;
        $bank['pix']= $request->pix;
        $bank->save();

        return redirect()->route('bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banck  $banck
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $banck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banck  $banck
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $banck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banck  $banck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $banck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banck  $banck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $banck)
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
