<x-layout>
<head>
    <title>Filmography | Home</title>
</head>
<body>
    <h1>My Favorite Movies</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <x-card href="{{route('movies.show',$movie->id)}}">
                <h3>{{$movie->title}}</h3>

            </x-card>
        @endforeach
    </ul>
</x-layout>