<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //$users = User::all();
        $users = User::paginate(15);
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;

        return view('users.user', [
            'nameUser' => $nameUser,
            'user' => $user,
            'users' => $users
        ]);
    }

    private function getLastNameCommaFirstName($fullName) {
        $names = explode(' ', $fullName);
        $firstName = $names[0];
        $lastName = str_replace($firstName, '', $fullName) ;
        return ['name'=>$firstName, 'lastName'=>$lastName];
    }

}
