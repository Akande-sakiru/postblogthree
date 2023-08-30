<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class member extends Controller
{
    //
    function member(){
        $data= user::paginate(2);
        return view('list',['users'=>$data]);
    }
}
