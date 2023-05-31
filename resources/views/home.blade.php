@extends('layouts.app')

@section('content')
    <div class="container text-center mt-4 homepage">
        <h1 text>HOMEPAGE PIZZAS</h1>
        <a href="{{ route('pizzas.index') }}">GO TO PIZZAS</a>
    </div>
@endsection
