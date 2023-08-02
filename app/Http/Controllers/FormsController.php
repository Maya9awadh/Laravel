<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function openForm(){
        return view('form');
    }

    public function submitForm(Request $request){
        $request ->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',

        ]);
        return $request;
    }
}
