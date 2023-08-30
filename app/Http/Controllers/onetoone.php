<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;


class onetoone extends Controller
{
    //
    function onetoone(){
        return user::find(2);
}

}
