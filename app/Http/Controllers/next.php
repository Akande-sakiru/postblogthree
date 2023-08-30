<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;

class next extends Controller
{
    //
    function index( user $key){
        return $key;
    }
}
