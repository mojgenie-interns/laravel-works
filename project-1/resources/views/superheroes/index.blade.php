<x-layout>
    
    <title>Superheroes</title>
    <h1>Favorite Superheroes</h1>
    
    <ul>
    @foreach ($superheroes as $superhero)
    <li>
       <x-card href="/superheroes/{{$superhero['id']}}" :highlight="true">
        <h3>{{$superhero['name']}}</h3>
        </x-card>
    </li>
    @endforeach
    </ul>

</x-layout>