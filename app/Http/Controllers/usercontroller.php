<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use App\Models\User;

class usercontroller extends Controller
{
    //
    function fetchData(){
        $collection= Http::get("https://reqres.in/api/users?page=2");
        return view( "db", ["collection"=>$collection ['data']]);
        
    }
   
}

// function fetchData(){
//     return User::all();
// }
