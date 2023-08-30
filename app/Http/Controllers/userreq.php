<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userreq extends Controller
{
    //
    function getReq( Request $req){
        return  $req->input();
    }
}
