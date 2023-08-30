<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    //
    function userAuth(Request $req){
        $data= $req->input();
        $req->session()->put('userAuth',$data['username']);
        return redirect('profile');
    }
}
