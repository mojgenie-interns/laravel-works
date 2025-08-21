<?php

use App\Models\Superhero;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'home',
        [
            'greeting' => 'Hello',
            'name' => 'Arjun',
        ]
    );
});

Route::get('/superheroes', function () {
    return view(
        'superheroes',
        [
            'superheroes' => Superhero::all()
        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/superheroes/{id}', function ($id) {
    $superhero = Superhero::find($id);
    return view('superhero', ['superhero' => $superhero]);
});
