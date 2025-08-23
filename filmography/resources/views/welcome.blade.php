<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmography | Home</title>
     @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to Filmography</h1>
    <p>Click the button to view my favorite movies.</p>
    <a href="/movies/" class="btn mt-4 inline-block">Find Movies</a>
    
</body>
</html>