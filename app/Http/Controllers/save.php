<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class save extends Controller
{
    
    function save( Request $req){
        $user = new user;
        $user->name=$req->name;
        $user->address=$req->address;
        $user->email=$req->email;
        $user->save();
        return redirect('save');
        // $user = User::create([
        //     'name' => $req->name,
        // ])
    }
    function deleteA(){
        $data= user::all();
        return view('save',['users'=>$data]);

    }
    function delete($id){ 
        $data= user::find($id);
        $data->delete();
        return redirect('save');

    }
    function edit($id){
        $data= user::find($id);
        return view("edit",['data'=> $data ]);
    }
    function updated(Request $req){
        $data = user::find($req->id);
        $data->name=$req->name;
        $data->address=$req->address;
        $data->email=$req->email;
        $data->save();
        return redirect('save');

    }
}
