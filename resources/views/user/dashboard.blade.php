@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row dashboardpanel">
        <div class="col-3 py-2">
        </div>
        <div class="col py-2">
            <section class="container py-2">
                  <div class="row"> 
                    @foreach ($products as $product)
                    @if ($cart->products()->find($product->id))
                    <div class="col-4 align-items-center">
                      <div class="card">
                        <img src="{{asset('kia.jpg')}}" class="card-img-top " alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->name }}</h5>
                          <a href={{ route('user.dashboard.cart.add', ['id'=>$product->id]) }} class="btn btn-danger disabled">Already in Cart</a>
                        </div>
                      </div>
                    </div>
                    @else
                    <div class="col-4 align-items-center">
                      <div class="card">
                        <img src="{{asset('kia.jpg')}}" class="card-img-top " alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->name }}</h5>
                          <a href={{ route('user.dashboard.cart.add', ['id'=>$product->id]) }} class="btn btn-info">Add to Cart</a>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                  </div>
            </section>
        </div>
        
    </div>
</div>
@endsection