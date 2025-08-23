<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('created_at', 'desc')->paginate(10);
        return view('movies.index', ["movies" => $movies]);
    }

    public function show(Movie $movie)
    {
        return view('movies.show', ["movie" => $movie]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'description' => 'required|string|min:20|max:1000',
        ]);
        Movie::create($validated);
        return redirect()->route('movies.index')->with('success', 'Movie added');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted.');
    }
}
