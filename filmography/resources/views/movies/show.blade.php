<x-layout>
<head>
    <title>Filmography | Movie</title>
</head>
<body>
    <h2>{{$movie->title}}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p>Director: <strong>{{$movie->director}}</strong></p>
        <p>{{$movie->description}}</p>
    </div>
    <form action="{{route('movies.destroy',$movie->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-4">Delete</button>
    </form>
</x-layout>  
