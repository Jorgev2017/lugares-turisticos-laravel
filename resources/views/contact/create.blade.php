@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color:#00ADB5;">Formulario de Contacto</h2>

    {{-- Mensajes de error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/contact" method="POST" class="card p-4 shadow-lg" style="background-color:#AAD8D3;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label" style="color:#393E46;">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label" style="color:#393E46;">Correo electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label" style="color:#393E46;">Teléfono</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label" style="color:#393E46;">Mensaje</label>
            <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color:#00ADB5; border:none;">
            📩 Enviar
        </button>
    </form>
</div>
@endsection