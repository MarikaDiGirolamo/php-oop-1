<?php
class Movie
{
    //Dichiaro le variabili di istanza per Movie
    public $title;
    public $genre;
    public $cast;
    public $director;
    public $language;
    public $nationality;

    //Definisco la funzione costruttore
    public function __construct($title, $genre, $cast, $director, $language, $nationality)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->cast = $cast;
        $this->director = $director;
        $this->language = $language;
        $this->nationality = $nationality;
    }

    public function getMovieName($title, $director)
    {
        $this->title = $title;
        $this->director = $director;
        return $this->title . "," . $this->director;
    }
}
//istanziati almeno due oggetti ‘Movie’
$addMovie = new Movie("Il Signore degli Anelli", "fantasy", "Elijah Wood, Viggo Mortensen, Liv Tyler", "Peter Jackson", "inglese, sindarin", "Nuova Zelanda, Stati Uniti d'America");
$otherMovie = new Movie("Star Wars", "fantascienza", "Mark Hamill, Carrie Fisher, Harrison Ford", "Richard Marquand", "inglese", "Stati Uniti d'America");

var_dump($addMovie);
var_dump($otherMovie);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>

</body>

</html>