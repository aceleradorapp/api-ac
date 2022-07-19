<?php

//https://www.youtube.com/watch?v=6ZlNdEelpCM - regras de validação

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Person;
use App\Models\Person_physical;
use App\Models\Phone;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonControlle extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $types = Type::all();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;

        return view('profile', [
            'types' => $types,
            'nameUser' => $nameUser,
            'user' => $user
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

        $person = Person::where('id', $user->id)->first();


        if($person){
            $personFisical = Person_physical::where('id', $person->person_physical_id)->first();

        }else{
            $person = new Person();
            $person['user_id'] = $user->id;
            $personFisical = new Person_physical();
        }


        $personFisical['name'] = $nameUser['name'];
        $personFisical['lastName'] = $nameUser['lastName'];
        $personFisical['cpf'] = $request->cpf;
        $personFisical['profession'] = $request->profession;
        $personFisical['birtDate'] = $request->birtDate;
        $personFisical->save();


        $person['person_physical_id'] = $personFisical->id;
        $person['type'] = '1';
        $person['email'] = $user->email;;
        $person['photo'] = "1234";
        $person->save();

        $address = Address::where('id', $person->id)->first();

        if(!$address){
            $address = new Address();
            $address['person_id'] = $person->id;
        }

        $address['street'] = $request-> street;
        $address['number'] = $request-> number;
        $address['complement'] = $request-> complement;
        $address['district'] = $request-> district;
        $address['city'] = $request-> city;
        $address['state'] = $request-> state;
        $address['zipCode'] = $request-> zipCode;
        $address->save();

        $phones = Phone::where('id', $person->id)->first();

        if(!$phones){
            $phones = new Phone();
            $phones['person_id'] = $person->id;
        }

        $phones['number'] = $request-> phone;
        $phones->save();

        return view('home');

        //dd($request, $person, $personFisical, $address, $phones);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
