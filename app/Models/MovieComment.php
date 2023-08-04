<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieComment extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'email', 'comment_text'];

    // Define the relationship with the 'movies' table
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
