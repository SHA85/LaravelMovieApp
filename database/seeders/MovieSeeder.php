<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $movies = [
            [
                "title"=>"The Shawshank Redemption",
                "summary"=>"Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
                "cover_image"=>"https://example.com/shawshank_redemption.jpg",
                "genre"=>"Drama",
                "author"=>"Frank Darabont",
                "tags"=>"drama, prison, friendship",
                "imdb_rating"=>"9.3",
                "pdf"=>"https://example.com/shawshank_redemption_script.pdf"
            ],
            [
                "title"=>"The Godfather",
                "summary"=>"The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.",
                "cover_image"=>"https://example.com/the_godfather.jpg",
                "genre"=>"Crime, Drama",
                "author"=>"Francis Ford Coppola",
                "tags"=>"crime, mafia, family",
                "imdb_rating"=>"9.2",
                "pdf"=>"https://example.com/the_godfather_script.pdf"
            ],
            [
                "title"=>"The Dark Knight",
                "summary"=>"When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.",
                "cover_image"=>"https://example.com/the_dark_knight.jpg",
                "genre"=>"Action, Crime, Drama",
                "author"=>"Christopher Nolan",
                "tags"=>"superhero, batman, crime",
                "imdb_rating"=>"9.0",
                "pdf"=>"https://example.com/the_dark_knight_script.pdf"
            ],
            [
                "title"=>"Pulp Fiction",
                "summary"=>"The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.",
                "cover_image"=>"https://example.com/pulp_fiction.jpg",
                "genre"=>"Crime, Drama",
                "author"=>"Quentin Tarantino",
                "tags"=>"crime, violence, nonlinear narrative",
                "imdb_rating"=>"8.9",
                "pdf"=>"https://example.com/pulp_fiction_script.pdf"
            ],
            [
                "title"=>"Schindler's List",
                "summary"=>"In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.",
                "cover_image"=>"https://example.com/schindlers_list.jpg",
                "genre"=>"Biography, Drama, History",
                "author"=>"Steven Spielberg",
                "tags"=>"holocaust, war, historical",
                "imdb_rating"=>"8.9",
                "pdf"=>"https://example.com/schindlers_list_script.pdf"
            ],
            [
                "title"=>"The Lord of the Rings: The Return of the King",
                "summary"=>"Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.",
                "cover_image"=>"https://example.com/lotr_return_of_the_king.jpg",
                "genre"=>"Adventure, Drama, Fantasy",
                "author"=>"Peter Jackson",
                "tags"=>"fantasy, epic, adventure",
                "imdb_rating"=>"8.9",
                "pdf"=>"https://example.com/lotr_return_of_the_king_script.pdf"
            ],
            [
                "title"=>"Fight Club",
                "summary"=>"An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.",
                "cover_image"=>"https://example.com/fight_club.jpg",
                "genre"=>"Drama",
                "author"=>"David Fincher",
                "tags"=>"drama, psychological, anarchy",
                "imdb_rating"=>"8.8",
                "pdf"=>"https://example.com/fight_club_script.pdf"
            ],
            [
                "title"=>"Forrest Gump",
                "summary"=>"The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75.",
                "cover_image"=>"https://example.com/forrest_gump.jpg",
                "genre"=>"Drama, Romance",
                "author"=>"Robert Zemeckis",
                "tags"=>"drama, historical, heartwarming",
                "imdb_rating"=>"8.8",
                "pdf"=>"https://example.com/forrest_gump_script.pdf"
            ],
            [
                "title"=>"Inception",
                "summary"=>"A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.",
                "cover_image"=>"https://example.com/inception.jpg",
                "genre"=>"Action, Adventure, Sci-Fi",
                "author"=>"Christopher Nolan",
                "tags"=>"sci-fi, mind-bending, dream",
                "imdb_rating"=>"8.8",
                "pdf"=>"https://example.com/inception_script.pdf"
            ],
            [
                "title"=>"The Matrix",
                "summary"=>"A computer hacker learns about the true nature of reality and his role in the war against its controllers.",
                "cover_image"=>"https://example.com/the_matrix.jpg",
                "genre"=>"Action, Sci-Fi",
                "author"=>"The Wachowskis",
                "tags"=>"sci-fi, action, cyberpunk",
                "imdb_rating"=>"8.7",
                "pdf"=>"https://example.com/the_matrix_script.pdf"
            ],
            [
                "title"=>"Avatar",
                "summary"=>"A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.",
                "cover_image"=>"https://example.com/avatar.jpg",
                "genre"=>"Action, Adventure, Fantasy",
                "author"=>"James Cameron",
                "tags"=>"sci-fi, aliens, fantasy",
                "imdb_rating"=>"7.8",
                "pdf"=>"https://example.com/avatar_script.pdf"
            ],
            [
                "title"=>"Jurassic Park",
                "summary"=>"A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park's cloned dinosaurs to run loose.",
                "cover_image"=>"https://example.com/jurassic_park.jpg",
                "genre"=>"Adventure, Sci-Fi, Thriller",
                "author"=>"Steven Spielberg",
                "tags"=>"dinosaurs, adventure, suspense",
                "imdb_rating"=>"8.1",
                "pdf"=>"https://example.com/jurassic_park_script.pdf"
            ],
            [
                "title"=>"The Avengers",
                "summary"=>"Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.",
                "cover_image"=>"https://example.com/the_avengers.jpg",
                "genre"=>"Action, Adventure, Sci-Fi",
                "author"=>"Joss Whedon",
                "tags"=>"superheroes, team-up, action",
                "imdb_rating"=>"8.0",
                "pdf"=>"https://example.com/the_avengers_script.pdf"
            ],
            [
                "title"=>"Titanic",
                "summary"=>"A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.",
                "cover_image"=>"https://example.com/titanic.jpg",
                "genre"=>"Drama, Romance",
                "author"=>"James Cameron",
                "tags"=>"romance, tragedy, historical",
                "imdb_rating"=>"7.8",
                "pdf"=>"https://example.com/titanic_script.pdf"
            ],
            [
                "title"=>"Die Hard",
                "summary"=>"An NYPD officer tries to save his wife and several others taken hostage by German terrorists during a Christmas party at the Nakatomi Plaza in Los Angeles.",
                "cover_image"=>"https://example.com/die_hard.jpg",
                "genre"=>"Action, Thriller",
                "author"=>"John McTiernan",
                "tags"=>"action, hostages, Christmas",
                "imdb_rating"=>"8.2",
                "pdf"=>"https://example.com/die_hard_script.pdf"
            ],
            [
                "title"=>"Inglourious Basterds",
                "summary"=>"In Nazi-occupied France during World War II, a plan to assassinate Nazi leaders by a group of Jewish U.S. soldiers coincides with a theatre owner's vengeful plans for the same.",
                "cover_image"=>"https://example.com/inglourious_basterds.jpg",
                "genre"=>"Adventure, Drama, War",
                "author"=>"Quentin Tarantino",
                "tags"=>"war, revenge, historical",
                "imdb_rating"=>"8.3",
                "pdf"=>"https://example.com/inglourious_basterds_script.pdf"
            ],
            [
                "title"=>"The Social Network",
                "summary"=>"As Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, he is sued by two brothers who claimed he stole their idea.",
                "cover_image"=>"https://example.com/the_social_network.jpg",
                "genre"=>"Biography, Drama",
                "author"=>"David Fincher",
                "tags"=>"biography, technology, drama",
                "imdb_rating"=>"7.7",
                "pdf"=>"https://example.com/the_social_network_script.pdf"
            ],
            [
                "title"=>"The Grand Budapest Hotel",
                "summary"=>"A writer encounters the owner of an aging high-class hotel, who tells him of his early years serving as a lobby boy in the hotel's glorious years under an exceptional concierge.",
                "cover_image"=>"https://example.com/grand_budapest_hotel.jpg",
                "genre"=>"Adventure, Comedy, Drama",
                "author"=>"Wes Anderson",
                "tags"=>"comedy, quirky, adventure",
                "imdb_rating"=>"8.1",
                "pdf"=>"https://example.com/grand_budapest_hotel_script.pdf"
            ]              
        ];
        
        // Loop through the movie data and create records in the database
        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}