@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">🌎 Lugares Turísticos de El Salvador</h1>

    <div class="row">
        @foreach($places as $place)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $place['title'] }}</h5>
                        <p class="card-text">
                            <strong>Departamento:</strong> {{ $place['department'] }} <br>
                            <strong>Categoría:</strong> {{ $place['category'] }} <br>
                            <strong>Precio:</strong> {{ $place['price'] }}
                        </p>
                        <a href="/places/{{ $place['id'] }}" class="btn btn-primary btn-sm">
                            Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
