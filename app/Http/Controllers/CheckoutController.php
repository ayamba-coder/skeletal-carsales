<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {
        $cart = auth()->user()->cart;
       return view('user.checkout')->with(['cart'=>$cart]);
    }
    
}

