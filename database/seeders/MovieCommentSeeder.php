<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MovieComment;

class MovieCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample movie comment data
        $comments = [
            [
                'movie_id' => 1,
                'email' => 'usera@email.com',
                'comment_text' => 'This movie is fantastic!',
            ],
            [
                'movie_id' => 1,
                'email' => 'userb@email.com',
                'comment_text' => 'One of the best movies I have ever seen.',
            ],
            [
                'movie_id' => 2,
                'email' => 'userc@email.com',
                'comment_text' => 'I enjoyed this movie a lot!',
            ],
            // Add more sample movie comments as needed...
        ];

        // Loop through the movie comment data and create records in the database
        foreach ($comments as $comment) {
            MovieComment::create($comment);
        }
    }
}
