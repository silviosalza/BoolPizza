@extends('layouts.app')

@section('content')
    <div class="container homepage text-center  d-flex align-items-center justify-content-center">
        <div class="homepage_title rounded-circle  ">
            <h1 class="title">ITALIAN PIZZA'S </h1>
            <a class="btn btn-outline-success" href="{{ route('pizzas.index') }}">Menu</a>
        </div>
       
    </div>
@endsection