<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\company;

class product extends Controller
{
    //
    function index(){
        return company::all();
        // return  DB:: connection('mysql1')-> table('product')->get();
    }
}
