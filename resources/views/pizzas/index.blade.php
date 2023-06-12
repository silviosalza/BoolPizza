@extends('layouts.app')
@section('content')
    <div class="container mt-4 ">
        <h1 class="text-center text-uppercase">PIZ<span class="green">ZE'S</span> </h1>
        <div class="text-center">
            <a href="{{ route('home') }}" class="btn btn-success ">Homepage</a>
            <a href="{{ route('pizzas.create') }}" class="btn btn-danger">Aggiungi una nuova Pizza</a>
        </div>

        <div class="row">
            @foreach ($pizzas as $pizza)
                <div class="col-3 p-4">
                    <div class="card mt-4">

                        <div class="card-body">
                            <h5 class="card-title text-uppercase mt-4 mb-2">{{ $pizza->name }}</h5>
                            <p class="card-text mb-4 mt-4">{{ $pizza->description }}</p>
                            <p class="card-text mb-4">Price: ${{ $pizza->price }}</p>
                            @if ($pizza->vegetarian)
                                <p class="card-text vegetarian mb-4">Vegetarian</p>
                            @else
                                <p class="card-text mb-4 ">Non-Vegetarian</p>
                            @endif
                            <a class="btn btn-success" href="{{ route('pizzas.show', $pizza->id) }}">
                                Info
                            </a>
                            <a class="btn btn-warning" href="{{ route('pizzas.edit', $pizza->id) }}">
                                Edit
                            </a>



                            {{-- <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2">
                                    Cancella
                                </button>
                            </form> --}}


                            <form class="d-inline-block" action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-delete"
                                    data-pizza-name='{{ $pizza->name }}'>
                                    Delete
                                </button>
                            </form>


                        </div>

                    </div>
                </div>
            @endforeach
          
        </div>
        @include('partials.modal_delete')
    </div>
@endsection
