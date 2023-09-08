<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function forminput(){
        return view('form_input');
    }

    public function welcome (Request $request){

        $firstname = $request['first_name'];
        $lastname = $request['last_name'];

        return view('welcome', compact('firstname', 'lastname'));
    }
}
