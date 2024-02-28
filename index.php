<?php

class Movie
{
    public $title;
    public $director;
    public $actor;
    public $year;

    // Costruttore
    public function __construct($title, $director, $actor, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->actor = $actor;
        $this->year = $year;
    }

    public function printInfo()
    {
        echo "Titolo: {$this->title}, Direttore: {$this->director}, Attori: {$this->actor}, Anno: {$this->year}\n";
    }
}


$movie = new Movie("Batman Begins", "Christopher Nolan", "Christian Bale", 2005);


$movie->printInfo();
