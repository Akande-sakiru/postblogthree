<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return member::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $user = new member;
        $user->name=$req->name;
        $user->address=$req->address;
        $user->email=$req->email;
        $result=$user->save();
        if($result){
            return ["x"=>"y"];
        }else{
            ["jhj"=>"jhgj"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return member::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //
        $data = member::find($id);
        if(!$data){
            return response()->json([
                "message"=>"you dey craze"
            ],404);
        }
        $data->name=$req->name;
        $data->address=$req->address;
        $data->email=$req->email;
        $result=$data->save();
        if($result){
            return ["x"=>"y"];
        }else{
            ["jhj"=>"jhgj"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data= member::find($id);
        $result =$data->delete();
        if($result){
            return ["x"=>"y"];
        }else{
            ["jhj"=>"jhgj"];
        }
    }
}
