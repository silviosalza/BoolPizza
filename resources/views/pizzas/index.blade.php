@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1 class="text-center text-uppercase">Pizze</h1>
        <a href="{{ route('home') }}" class="btn btn-primary">Homepage</a>
        <a href="{{ route('pizzas.create') }}" class="btn btn-secondary">Aggiungi una nuova Pizza</a>
        <div class="row">
            @foreach ($pizzas as $pizza)
                <div class="col-3 p-4">
                    <div class="card">
                       
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">{{ $pizza->name }}</h5>
                            <p class="card-text">{{ $pizza->description }}</p>
                            <p class="card-text">Price: ${{ $pizza->price }}</p>
                            @if ($pizza->vegetarian)
                                <p class="card-text vegetarian">Vegetarian</p>
                            @else
                                <p class="card-text ">Non-Vegetarian</p>
                            @endif
                            <a class="btn btn-success" href="{{ route('pizzas.show', $pizza->id) }}">
                                Info
                            </a>
                            <a class="btn btn-warning" href="{{ route('pizzas.edit', $pizza->id) }}">
                                Edit
                            </a>
                            <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2">
                                    Cancella
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
