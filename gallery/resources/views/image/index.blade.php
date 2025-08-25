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
    <div class="p-8 max-w-md mx-auto">
        <h1 class="text-2xl mb-4">Images</h1>
        <a href="{{route('image.create')}}" class="btn btn-primary mb-4">Upload New</a>
        <div class="flex gap-4">
            @foreach ($images as $image)
                <div class="ring-2 rounded">
                    <form action="{{route('image.destroy',$image)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-error">Delete</button>
                    </form>
                    <img src="{{\Illuminate\Support\Facades\Storage::url($image->path)}}" class="w-48 h-48 object-contain" alt="">
                    <h4>{{$image->label}}</h4>
                </div>
            @endforeach
        </div>
    </div>
    </body>
</html>
