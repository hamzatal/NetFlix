<?php
// app/Models/Genre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    // protected $table = 'genres'; // Uncomment if your table name is different

    // Define the fillable fields
    protected $fillable = [
        'name', // Add other columns as needed
    ];
}
