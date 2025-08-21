<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'welcome',
        ['greeting' => "Hello"]
    );
});

Route::get('/superheroes', function () {
    $superheroes = [
        ["name" => "Superman", "real name" => "Clark Kent", "id" => 1],
        ["name" => "Batman", "real name" => "Bruce Wayne", "id" => 2],
        ["name" => "Spider-Man", "real name" => "Peter Parker", "id" => 3],
        ["name" => "Wolverine", "real name" => "James Hawlett", "id" => 4],
    ];
    return view(
        'superheroes.index',
        ["superheroes" => $superheroes]
    );
});

Route::get('/superheroes/{id}', function ($id) {
    return view(
        'superheroes.show',
        ["id" => $id]
    );
});

Route::get('/superheroes/add', function () {
    return view(
        'superheroes.add'
    );
});
