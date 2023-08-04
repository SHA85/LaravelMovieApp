<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'summary', 'cover_image', 'genre', 'author', 'tags', 'imdb_rating', 'pdf',
    ];

    public function comments() {
        return $this->hasMany(MovieComment::class);
    }
}
