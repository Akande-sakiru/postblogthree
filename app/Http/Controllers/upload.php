<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload extends Controller
{
    // normal
    // function uploadFile(Request $req){
    //     return $req->file('file')->store('pics') ;
    // }
    // with api
    function uploadFile(Request $req){
        $result= $req->file('file')->store('doc') ;
        return ["result"=>$result];
    }

}
