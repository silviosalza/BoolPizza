@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="{{ route('pizzas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="vegetarian">Vegetariana</label>
                <select name="vegetarian" id="vegetarian">
                    <option value="0">Non vegetariana</option>
                    <option value="1">Vegetariana</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo ($):</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <input type="textarea" class="form-control" id="description" name="description">
            </div>
            <a class="btn btn-success" href="{{ route('pizzas.index') }}">Menu</a>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
