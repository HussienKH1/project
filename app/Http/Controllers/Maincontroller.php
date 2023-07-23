<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Maincontroller extends Controller
{
    function login(){
        return view ('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required|min:5|max:20',
        ]);


        $admin = new User();
        $admin -> name = $request->name;
        $admin -> email = $request->email;
        $admin -> password = Hash::make ($request->password);
        $save = $admin->save();

    }
    function plan(){
        return view('plan');
    }
}
