@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0" style="background-color:#AAD8D3;">
        <div class="card-body">
            <h2 class="card-title fw-bold" style="color:#00ADB5;">
                {{ $place['title'] }}
            </h2>
            <p><strong style="color:#393E46;">Departamento:</strong> {{ $place['department'] }}</p>
            <p><strong style="color:#393E46;">Categoría:</strong> {{ $place['category'] }}</p>
            <p><strong style="color:#393E46;">Precio:</strong> {{ $place['price'] }}</p>
            <p style="color:#393E46;">{{ $place['description'] }}</p>

            <a href="/places" class="btn btn-primary mt-3" style="background-color:#00ADB5; border:none;">
                ⬅ Volver a la lista
            </a>

            <!-- Formulario de contacto dentro de la vista -->
            <hr>
            <h4 style="color:#00ADB5;" class="mt-4">Solicitar más información</h4>
            <form action="/contact" method="POST" class="card p-4 shadow-lg mt-3" style="background-color:#F2F2F4;">
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
                    📩 Enviar solicitud
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

