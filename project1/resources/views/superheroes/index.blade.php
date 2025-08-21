<x-layout>
    
    <title>Superheroes</title>

    <h1>Favorite Superheroes</h1>
    @foreach ($superheroes as $superhero)
    <li>
        {{$superhero['name']}} <a href="/superheroes/{{$superhero['id']}}">View Details</a>
    </li>
    @endforeach

</x-layout>