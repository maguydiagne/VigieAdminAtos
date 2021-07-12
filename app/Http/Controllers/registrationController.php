<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class registrationController extends Controller
{
    public function register(){
        return view('authentification.register');
    }
    public function postregister(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all);
        dd($user->all());
    }
}

