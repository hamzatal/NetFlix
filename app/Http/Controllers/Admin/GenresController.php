<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use App\Http\Controllers\Controller;

class GenresController extends Controller
{
    public function index()
    {
        // Fetch all genres
        $genres = Genre::all();
        
        // Return view with genres data
        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function store(Request $request)
    {
        // Validate and create a new genre
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Genre::create($request->all());

        return redirect()->route('admin.genres.index');
    }
}
