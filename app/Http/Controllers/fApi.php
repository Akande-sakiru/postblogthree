<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class fApi extends Controller
{
    // // post method
    // function index(Request $req){
    //     $user= new user;
    //     $user['name']=$req->name;
    //     $user->email =$req->email;
    //     $user->address =$req->address;
    //     $result = $user->save();
    //     if($result){
    //         return ["Result"=>"Data has been saved"];
    //     }
    //     else{
    //         return["Result"=> "Failed to save data"];
    //     }
    //     // get method
    //     return user::all();
    //     return ['name'=>'shakirullah','email'=>'akande@gmail.com','address'=>'UK'];
    // }

    // update
    // function index(Request $req){
    //         $user= user::find($req->id);
    //         $user['name']=$req->name;
    //         $user->email =$req->email;
    //         $user->address =$req->address;
    //         $result = $user->save();
    //         if($result){
    //             return ["Result"=>"Data has been updated"];
    //         }
    //         else{
    //             return["Result"=> "Failed to update data"];
    //         }
    // }
    // delete
//     function index($id){
//         $user= user::find($id);
//         $result = $user->delete();
//         if($result){
//             return ["Result"=>"Data has been deleted"];
//         }
//         else{
//             return["Result"=> "Failed to delete data"];
//         }
// }
// search
    function inde($name){
        $result= user::where("name","like","%".$name."%")->get();
        if($result){
           return  ["Result"=>"data is available"];

        }
        else{
          return ["Result"=>"data not available"];

        }
}
        // validator
        function index(Request $req){
            $rules=array(
                    "name"=>"required | min:5 | max:20",
                    "email"=>"required | min:6 | max:30",
                    "address"=>"required | min:10 | max:30"
            );
            $validator = Validator::make($req->all(),$rules);
            if($validator->fails()){
                return response()->json($validator->errors(),419 );
            }
            else{
                $user = new user;
                $user['name']=$req->name;
                $user->email =$req->email;
                $user->address =$req->address;
                $result = $user->save(); 
                if($result){
                    return ["Result"=>"Data has been updated"];
                }
                else{
                    return["Result"=> "Failed to update data"];
                }
            }
        }
}
