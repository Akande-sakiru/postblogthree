<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class querys extends Controller
{
    //
    function dbGet(){
        return DB::table('users')-> where('id',14)-> delete(
            // [
            //     'name'=>'justice',
            //     'email'=>'j@gmial.com',
            //     'address'=>'USA',
            // ]
            );
        // return (array)DB::table('users')->find(2);
        // return view('qb',['data'=>$data]);
    }
}
