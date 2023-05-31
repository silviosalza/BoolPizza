
@extends('layouts.app')
@section('content')
        
    <div class="container mt-4">
        <h1 class="text-center text-uppercase">Pizze</h1>
        <a href="{{ route('home') }}" class="btn btn-primary">Homepage</a>   
    <div class="row">
            @foreach ($pizzas as $pizza)
            <div class="col-3 p-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pizza->name }}</h5>
                        <p class="card-text">{{ $pizza->description }}</p>
                        <p class="card-text">Price: ${{ $pizza->price }}</p>
                        @if ($pizza->vegetarian)
                            <p class="card-text">Vegetarian</p>
                        @else
                            <p class="card-text">Non-Vegetarian</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection