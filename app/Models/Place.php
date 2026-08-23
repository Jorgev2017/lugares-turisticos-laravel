<?php

namespace App\Models;

class Place
{
    public static function all()
    {
        // Leer el archivo JSON con todos los lugares
        $json = file_get_contents(storage_path('app/places.json'));
        return json_decode($json, true);
    }

    public static function find($id)
    {
        // Buscar un lugar por su ID
        $places = self::all();
        return collect($places)->firstWhere('id', $id);
    }
}