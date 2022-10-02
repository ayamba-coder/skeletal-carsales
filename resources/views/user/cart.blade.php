@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center py-2" style="text-decoration: bold"><i class="fa fa-shopping-bag"></i> My Cart</h3>
        @if ($cart->products->count())
        <div class="row align-items-center">
            @if ($cart->products->count())
                
            @endif
            <div class="col-8">
                <hr class="mt-0 divider mb-3 bg-dark"/>
                @foreach ($cart->products as $product)
                <form class="form" action={{route('user.dashboard.cart.update')}} method="POST">
                    @csrf
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-8"><img src="{{asset('suv.jpg')}}" class="img-fluid" alt="..."></div>
                            <div class="col-4" style="bold">{{$product->name}} <br />Color:blue</div>
                        </div>
                    </div>
                    <div class="col-2 text-center">Each <p>{{$product->prices}}</p> </div>
                    <div class="col-1 text-center">Quantity <br/><input type="text" value="{{$product->pivot->quantity}}" style="width:100%" name="quantity"></div>
                    <input name='id' value={{$product->id}} hidden>
                    <div class="col-2 text-center">
                        Total <p>{{$product->pivot->total}}</p>
                    </div>
                    <div class="col-1 text-center">
                        <br/><button href={{route('user.dashboard.cart.update',['id'=>$product->id])}} class="btn btn-primary" type="submit">Update</button>
                    </div>
                    <div class="col-1 text-center">
                        <br/><a href={{route('user.dashboard.cart.delete',['id'=>$product->id])}} class="btn btn-danger">Remove</a>
                    </div>
                </div>
                </form>
                <hr class="mt-0 divider mb-3 bg-dark"/>
                @endforeach
            </div>
            <div class="col-4 text-center   ">
                   <p>Shipping Cost:</p>
                   <p>Discount: </p>
                   <p>Estimated Cost: </p>
                   <a href={{route('user.checkout',['id'=>$cart->id])}} class="btn btn-info">Checkout</a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">5 items</div>
            <div class="col">Total: ${{$cart->products->sum('prices')}}</div>
        </div>
        @else
        <div class="text-center py-2 mt-4">
            <h3>Empty Basket <a href={{route('user.dashboard')}} style="text-decoration: underline">click Here</a> to add items</h3>
        </div>
        @endif
        
    </div>
@endsection