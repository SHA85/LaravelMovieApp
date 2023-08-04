<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieComment;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = 5; // Number of movies per page
        $movies = Movie::paginate($perPage);

        return response()->json($movies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Movie::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentMovie = Movie::findOrFail($id);
        $comments = $currentMovie->comments;

        // Criteria for selecting related movies
        $criteria = [
            'author' => $currentMovie->author,
            'genre' => $currentMovie->genre,
            'tags' => $currentMovie->tags,
            'imdb_rating' => $currentMovie->imdb_rating,
        ];

        // Query related movies using the criteria
        $relatedMovies = Movie::where(function ($query) use ($criteria) {
            foreach ($criteria as $attribute => $value) {
                if ($value) {
                    $query->orWhere($attribute, $value);
                }
            }
        })->where('id', '<>', $id) // Exclude the current movie
        ->orderBy('imdb_rating', 'desc') // Order by IMDb rating (highest first)
        ->limit(7) // Show only 7 related movies
        ->get();

        return response()->json([
            'movie' => $currentMovie,
            'related_movies' => $relatedMovies
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(null, 204);
    }

    public function comment(Request $request, $id) {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email|valid_email',
            'comment_text' => 'required|string',
        ]);

        // Create a new MovieComment instance and save it to the database
        $movieComment = MovieComment::create([
            'movie_id' => $id,
            'email' => $request->input('email'),
            'comment_text' => $request->input('comment_text'),
        ]);

        // You can perform any additional actions or return a response as needed

        return response()->json(['message' => 'Movie comment created successfully']);
    }
}