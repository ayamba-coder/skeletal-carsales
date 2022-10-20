<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ContactEmailSent;
use App\Models\Product;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public $req;
    public function __construct(Request $req)
    {
        $this->req = $req;
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $user = auth()->user();
        $user->cart()->updateOrCreate([
            'user_id' => $user->id
        ]);
        return view('user.dashboard')->with(['products' => Product::all(),'cart'=>auth()->user()->cart]);
    }
    
    public function logout(){
        Auth::logout();
        return redirect('login')->with('status','logged out');
    }

    public function sendContactEmail()
    {
        $user=User::where('id',Auth::user()->id)->first();
        event(new ContactEmailSent($user)) ? notify()->success('Email Sent'):notify()->error("Can't connect at the moment");
        return back();
    }
    public function updateCart(Request $request)
    {
        $product = auth()->user()->cart->products()->find($request['id']);
        $product->pivot->total = $product->prices*$request->input('quantity');
        $product->pivot->quantity = $request->input('quantity');
        $product->pivot->save();
        notify()->success('Item updated successfully');
        return back();
    }
}
