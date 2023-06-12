@extends('layouts.app')

@section('content')
<h1 class="text-center">Modifica la tua pizza</h1>

    <div class="container">
        
        
        <form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input value="{{ $pizza->name }}" type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="vegetarian">Vegetariana</label>
                <select name="vegetarian" id="vegetarian">
                    <option @selected($pizza->type = false) value="0">Non vegetariana</option>
                    <option @selected($pizza->type = true) value="1">Vegetariana</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo ($):</label>
                <input value="{{ $pizza->price }}" type="number" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <input value="{{ $pizza->description }}" type="textarea" class="form-control" id="description" name="description">
            </div>


            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                @foreach ($ingredients as $ingredient)
                    <input type="checkbox" class="btn-check" id="{{ $ingredient->name }}" autocomplete="off" name="ingredient_id[]" value="{{ $ingredient->id }}">
                    <label class="btn btn-outline-primary" for="{{ $ingredient->name }}">{{ $ingredient->name }}</label>
                @endforeach
            </div>
            



            <a class="btn btn-primary" href="{{ route('pizzas.index') }}">Menu</a>
            <button type="submit" class="btn btn-warning">Invia</button>
        </form>
    </div>
@endsection
