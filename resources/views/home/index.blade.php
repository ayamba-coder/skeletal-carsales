@extends('layouts.app')
@section('content')
    <section class="header">
         <div class="p-5 mb-4 rounded-3">
            <div class="container-fluid">
                <div class="row gx-4">
                    <div class="col-sm-6">
                        <div class="py-5">
                            <h1 class="display-5 fw-bold">Welcome</h1>
                            <p class="col-md-8 fs-4">The biggest online car auction market,purchase new and fairly-used vehicles with us today</p>
                            <a href={{route('register')}} class="btn btn-outline-success">Get Involved</a>
                          </div>
                    </div>
                    <div class="col-sm-6 d-none d-md-block">
                        <img src="{{asset('cargirl.png')}}" alt="car" class="img-fluid hidden-sm">
                    </div>
                </div>
            </div>
           </div>
    </section>
    <div class="container bg-dark ">
      <h1 class="display-6 fw-bold text-white text-center">Why Choose Us</h1>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-sm-4">
          <div class="card text-white bg-dark">
            <img src="{{asset('bmw1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">WIDE RANGE OF BRANDS</h5>
              <p class="card-text">With a robust selection of popular vehicles on hand, as well as leading vehicles from BMW and Ford.</p>
            </div>
        </div>
      </div>
      
        <div class="col-sm-4">
          <div class="card text-white bg-dark">
          <a href="#" class="text-decoration-none link-dark">
            <div class="card text-white bg-dark">
                <img src="{{asset('smiling.jpg')}}" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">FINANCING MADE EASY</h5>
                    <p class="card-text">Our finance department strives to find financial solutions to save you money and offer you the best deal.</p>
                </div>
            </div>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-dark">
              <img src="{{asset('maintenance.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title text-center">CAR SERVICE & MAINTENANCE</h5>
                  <p class="card-text">Our service department maintains your car to stay safe on the road for many more years.</p>
              </div>
          </div>
        </div>
      </div>
    </div>
    <section class="container py-2">
        <h2>Recent collection</h2>
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <div class="card text-white">
                  <img src="{{asset('kia.jpg')}}" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white">
                  <img src="{{asset('nissan.jpg')}}" class="card-img-top " alt="...">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card text-white">
                  <img src="{{asset('honda.jpg')}}" class="card-img-top " alt="...">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card text-white">
                  <img src="{{asset('mercedez.jpg')}}" class="card-img-top " alt="...">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 sm-d-none">
            <div class="col">
                <div class="card text-white">
                  <img class="card-img-top" src="{{asset('suv.jpg')}}" alt="Title">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white">
                    <img class="card-img-top" src="{{asset('coupe.jpg')}}" alt="Title">
                    <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card text-white">
                  <img src="{{asset('ford.jpg')}}" class="card-img-top " alt="...">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card text-white">
                  <img src="{{asset('honda.jpg')}}" class="card-img-top " alt="...">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection