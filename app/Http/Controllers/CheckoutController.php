<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('checkout',[
            'intent' => $user -> createSetupIntent()
        ]);
    }

    public function store(Request $request){
        
    }
}
