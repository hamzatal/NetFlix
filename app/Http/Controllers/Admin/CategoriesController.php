<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category; // Assuming you have a Category model

class CategoriesController extends Controller
{
    public function index()
    {
        // Retrieve all categories (adjust based on your data structure)
        $categories = Category::all();

        return view('admin.categories.index', compact('categories')); // Adjust view path as needed
    }
}
