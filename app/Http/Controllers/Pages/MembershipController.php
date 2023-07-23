<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Plan;

class MembershipController extends Controller
{
    public function __construct()
    {
        return $this -> middleware(['auth', 'verified']);
    }
    
    public function plan()
    {
        return view('plan');
    }
}
