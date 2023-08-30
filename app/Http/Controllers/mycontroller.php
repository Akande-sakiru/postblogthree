<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    // html form binding
    function getData(Request $req){
        $req->validate([
            'username'=> 'required| max:10',
            'password'=> 'required | min:5'
        ]);
        return $req->input();
    }

}
