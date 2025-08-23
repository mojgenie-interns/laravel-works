<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmography</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if (@session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{session('success')}}
        </div>
    @endif
    <header>
        <nav>
        <h1>Filmography</h1>
        <a href="{{route('movies.index')}}">Movies</a>
        <a href="{{route('movies.create')}}">Add Movies</a>
        </nav>
    </header>
    <main class="container">
        {{$slot}}
    </main>
    
</body>
</html>