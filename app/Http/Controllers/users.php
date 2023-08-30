<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //  public function index (){
    //     echo "hello conroller";
    // }

    // public function boy(){
    //     return view("about",['user'=>['bola','shade','jane']]);
    // }
    public function boy(){
        $data=['bola','shade','jane','bola','shade','jane'];

        return view("about",['users'=>$data]);
    }
}
