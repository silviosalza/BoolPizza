@extends('layouts.app')

@section('content')
    <div class="container-fluid pizzas_info text-center mt-4">
        <h2 class="mb-4 ">INFO: Pizza {{ $pizza->name }}</h2>
        <ul class="list-group">
            <li class="list-group-item list-group-item-primary"> Prezzo: {{ $pizza->price }}</li>
            <li class="list-group-item list-group-item-secondary">
                @if ($pizza->vegetarian)
                    <p class="card-text" >Vegetarian</p>
                @else
                    <p class="card-text" >Non-Vegetarian</p>
                @endif

            <li class="list-group-item list-group-item-success">{{ $pizza->description }} </li>

            <li class="list-group-item list-group-item-success">
                @forelse ($pizza->ingredients as $ingredient )
                   {{$ingredient->name}} {{$loop->last ? '' : ','}}
                @empty
                    <span>Nessun ingrediente</span>
                @endforelse

            </li>
               

        </ul>
        <a class="btn btn-primary mt-4" href="{{ route('pizzas.index') }}">Menu</a>
    </div>
@endsection
