<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAdd extends Controller
{
    //
    function addMember(Request $req){
        $data= $req->input('email');
        $req->session()->flash('useAdd',$data);
        return redirect('add');
    }
}
