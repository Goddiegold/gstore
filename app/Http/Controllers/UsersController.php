<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
public function getUsers(){
    if(session()->has('estore-user-token')){
        $users = DB::select("select * from users");
        // return $users;
        return view("dashboard",['users'=>$users]);
    }else{
        return redirect("/login");
    }
   
}
    
    public function handleLogin(Request $request)  {
        $data = $request->validate([
            'email'=>'required|min:3|email',
            'password'=>'required|min:3|max:15',
        ]); 

        $user = DB::table('users')->where('email', $data['email'])->first();
        if ($user && $data['password'] === $user->password) {
            // return response()->json(['message' => 'Login successful', 'data' => $user], 200);
            $request->session()->put('estore-user-token',$user);
            return redirect("/dashboard");
        } else {
            // Invalid credentials
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        // return json_encode($data);
    }

    public function handleRegister(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:15',
        ]);
    
        // Check if the user with the given email already exists
        $existingUser = DB::table('users')->where('email', $data['email'])->first();
    
        if ($existingUser) {
            // User with the given email already exists
            return response()->json(['message' => 'Email already registered'], 422);
        }
    
        // Hash the password before storing it in the database
        // $hashedPassword = Hash::make($data['password']);
    
        // Insert a new record into the database
        $user = DB::table('users')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    
        // return response()->json(['message' => 'Registration successful'], 201);
        $request->session()->put('estore-user-token',$user);
        return redirect("/dashboard");
    }
}
