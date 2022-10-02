<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(Request $request)
    {

        $user = auth()->user();
        $user->cart()->updateOrCreate([
            'user_id' => $user->id
        ]);   
        return view('user.cart')->with(['cart'=>auth()->user()->cart]);

    }
    public function removeFromCart(Request $request)
    {
       Auth::user()->cart->products()->detach($request['id']);
        notify()->success('Product deleted successfully');
       return back();
    }

    public function addToCart(Request $request)   
    {
        $user = auth()->user();
        $user->cart()->updateOrCreate([
            'user_id' => $user->id
        ]);
        $product = Product::find($request['id']);
        $cart = auth()->user()->cart;
        $cart->products()->syncWithoutDetaching([$request['id'] => ['total' => $product->prices,'quantity'=>1]]);
        notify()->success('Item added to cart');
        return back();
    }
}
