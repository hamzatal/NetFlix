<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    public function create()
    {
        // Return the view to create a movie
        return view('admin.movies.create');
    }

    public function store(Request $request)
    {
        // Validate and store the movie data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_date' => 'required|date',
            // Add other fields as needed
        ]);

        Movie::create($validated);

        return redirect()->route('admin.movies.index')->with('success', 'Movie created successfully');
    }
}
