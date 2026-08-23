<?php

namespace App\Http\Controllers;

use App\Models\Place;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function show($id)
    {
        $place = Place::find($id);
        return view('places.show', compact('place'));
    }
}