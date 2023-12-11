<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
public function getUsers(){
    $users = DB::select("select * from users");
    // return $users;
    return view("dashboard",['users'=>$users]);
}
    
    public function handleLogin(Request $request)  {
        
    }

    public function handleRegister(Request $request) {

    }
}
