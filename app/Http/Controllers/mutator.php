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
          $user->name='Akanbi';
          $user['email']='akanbi@test.com';
          $user['address']='UK';
          $user->save();

    }
}
