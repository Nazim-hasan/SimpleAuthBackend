<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class userAPIAuth extends Controller
{
    public function login(Request $req){

        return $req->all();

        $user = Client::where('email',$req->email)->where('password',$req->password)->first();
        if($user){
            return $user;
        }
        return false;
    }
}
