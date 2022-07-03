@php
    use \App\Http\Controllers\CarController;    
@endphp

@section('title','Cars')

@extends('master')

@section('main')
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Rent a Car</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
    <div class="container">
        <div class="row">
            @foreach ($allCars as $car)
                <div class="col s4">
                          <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                              <span class="card-title">{{$car->car}}   {{ $car->model}}</span>
                              <p>{{$car->desc}}</p>
                            </div>
                            <div class="card-action">
                              <a href="#">{{ $car->price }}</a>
                              <a href="#">{{CarController::convert($car->created_at)}}</a>
                            </div>
                          </div>
                       
                              
                </div>
            @endforeach
        </div>
    </div>
   
@endsection