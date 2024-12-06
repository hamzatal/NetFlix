<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor; // Assuming you have an Actor model

class ActorsController extends Controller
{
    public function index()
    {
        // Retrieve all actors (adjust this as per your data structure)
        $actors = Actor::all();

        return view('admin.actors.index', compact('actors')); // Adjust the view path as needed
    }
}
