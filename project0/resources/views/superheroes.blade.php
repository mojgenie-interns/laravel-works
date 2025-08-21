<x-layout>
        <title>My Favorite Superheroes</title>
        <x-slot:heading>
                My Favorite Superheroes
        </x-slot:heading>
        <p>
        @foreach ($superheroes as $superhero)
        <li><strong>{{$superhero['name']}}</strong> AKA {{$superhero['real name']}}</li>
        @endforeach
    </p>
</x-layout>