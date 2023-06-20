<?php
class Movie
{
    //Dichiaro le variabili di istanza per Movie
    public $title;
    public $genre;
    public $cast;
    public $director;
    public $language;
    public $year;

    //Definisco la funzione costruttore
    public function __construct($title, $genre, $cast, $director, $language, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->cast = $cast;
        $this->director = $director;
        $this->language = $language;
        $this->year = $year;
    }

    public function getMovieName($title, $director)
    {
        $this->title = $title;
        $this->director = $director;
        return $this->title . "," . $this->director;
    }
}
//istanziati almeno due oggetti ‘Movie’
$addMovie = new Movie("Il Signore degli Anelli", "fantasy", "Elijah Wood, Viggo Mortensen, Liv Tyler", "Peter Jackson", "inglese, sindarin", "2001");
$otherMovie = new Movie("Star Wars: Il Ritorno dello Jedi", "fantascienza", "Mark Hamill, Carrie Fisher, Harrison Ford", "Richard Marquand", "inglese", "1983");

var_dump($addMovie);
var_dump($otherMovie);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <!-- stampo a schermo -->
                    <?php
                    echo "<h1>" . $addMovie->title . "</h1>";
                    echo "<h3> " . $addMovie->director . "</h3>";
                    echo "<h4> " . $addMovie->year . "</h4>"
                    ?>
                </div>
                <div class="col-6">
                    <?php
                    echo "<h1>" . $otherMovie->title . "</h1>";
                    echo "<h3> " . $otherMovie->director . "</h3>";
                    echo "<h4> " . $otherMovie->year . "</h4>"
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>