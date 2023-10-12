<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class mutator extends Controller
{
    //
    function index(){
        // return user::all();
          $user = new User;
          $user->name='AkanbiRanbir';
          $user['email']='akanbiR@test.com';
          $user['address']='USA';
          $user->save();
          return ["x"=>"y"];

    }
}
