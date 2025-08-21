<?php

namespace App\Models;

use Illuminate\Support\Arr;

use function Laravel\Prompts\error;

class Superhero
{
    public static function all()
    {
        [
            [
                'name' => 'Batman',
                'real name' => 'Bruce Wayne'
            ],
            [
                'name' => 'Superman',
                'real name' => 'Clark Kent'
            ],
            [
                'name' => 'Spider-Man',
                'real name' => 'Peter Parker'
            ],
        ];
    }

    public static function find(int $id): array
    {
        $superhero = Arr::first(static::all(), fn($superhero) => $superhero['id'] = $id);
        if (!$superhero) {
            abort(404);
        }
    }
}
