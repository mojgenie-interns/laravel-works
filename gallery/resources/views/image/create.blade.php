<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    </head>
    <body class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <h1 class="text-2xl mb-4">Upload New</h1>
        <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <input type="file" name="image" class="file-input file-input-bordered file-input-primary w-full max-w-xs"/>
        </div>

        <div class="mb-4">
            <input type="text" name="label" placeholder="Image label" class="input input-bordered input-primary w-full max-w-xs"/>
        </div>
        <button class="btn btn-primary">Upload</button>
        </form>
    </div>
    
    </body>
</html>
