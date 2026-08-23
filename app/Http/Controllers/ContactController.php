<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Mostrar el formulario
    public function create() {
        return view('contact.create');
    }

    // Procesar el formulario
    public function store(Request $request) {
        // Validar datos
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{8,15}$/',
            'message' => 'required|min:10',
        ]);

        // Preparar datos
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // Guardar en archivo JSON (storage/app/contact.json)
        $jsonPath = storage_path('app/contact.json');
        $contacts = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
        $contacts[] = $data;
        file_put_contents($jsonPath, json_encode($contacts, JSON_PRETTY_PRINT));

        // Redirigir con mensaje de éxito
        return redirect('/contact')->with('success', 'Tu mensaje fue enviado correctamente.');
    }
}