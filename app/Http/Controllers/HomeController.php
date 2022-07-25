<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = new User();
        $user = Auth::user();
        if($user){
            $person = Person::where('id', $user->id)->first();

            if(!$person){
                //return redirect()->route('profile');
                return view('dashboard');
            }else{
                if($person->type == "10"){
                   // colocar pagina especial para o Owner, nivel 10
                   return view('homeOwner'); 
                }
            }
        }

        //return view('home');
        return view('dashboard');
    }
}
