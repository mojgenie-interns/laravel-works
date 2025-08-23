<x-layout>

    <head>
        <title>Filmography | Add Movies</title>
    </head>

        <form action="{{route('movies.store')}}" method="POST">
          @csrf
  <h2>Add a Movie</h2>

  <label for="title">Title:</label>
  <input 
    type="text" 
    id="title" 
    name="title" 
    value="{{ old('title') }}" 
    required
  >

  <label for="director">Director:</label>
  <input 
    type="text" 
    id="director" 
    name="director" 
    value="{{ old('director') }}" 
    required
  >

  <label for="description">Description:</label>
  <textarea
    rows="5"
    id="description" 
    name="description" 
    required
  >{{old('description')}}</textarea>


  {{-- <label for="language_id">Language:</label>
  <select id="language_id" name="language_id" required>
    <option value="" disabled selected>Select a language</option>
    
  </select> --}}

  <button type="submit" class="btn mt-4">Add Movie</button>
  @if($errors->any())
  <ul class="px-4 py-2 bg-red-100">
    @foreach ($errors->all() as $error)
    <li class="my-2 text-red-500">{{$error}}</li>
    @endforeach
  </ul>    
  @endif
  
</form>
</x-layout>