@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('pizzas.index') }}">Menu</a>
        <h2>Informazioni Pizza {{ $pizza->name }}</h2>
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Prezzo: </strong> {{ $pizza->price }}
            </li>
            <li>
                @if ($pizza->vegetarian)
                <p class="card-text">Vegetarian</p>
            @else
                <p class="card-text">Non-Vegetarian</p>
            @endif
            </li>
            <li>
                {{ $pizza->description }} 
            </li>
        </ul>
    </div>
    {{-- <div>
        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">
                Elimina
            </button>
        </form>
    </div> --}}
@endsection