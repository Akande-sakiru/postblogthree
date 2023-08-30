<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\best;
use Illuminate\Support\Facades\Hash;

class sanctum extends Controller
{
    //
    function index(Request $request)
    {
        $user= best::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'best' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}
