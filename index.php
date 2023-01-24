<?php

// definisco una classe `Movie`:
class Movie
{
    //  dichiaro delle variabili d'istanza:
    public $title;
    public $runningTime;
    public $language;

    //  definisco un costruttore:
    public function __construct($title, $runningTime, $language)
    {
        $this->title = $title;
        $this->runningTime = $runningTime;
        $this->language = $language;
    }

    //  definisco un metodo:
    public function getHtml()
    {
        return "<h1>Title: " . $this->title . "</h1>"
            . "<br><h3>Running Time: " . $this->runningTime . "<h3>"
            . "<br><h3>Language " . $this->language . "</h3>"
            . "<br>";
    }
}

//Istanzio due oggetti `Movie` e stampo a schermo i valori delle relative proprietà:
$movie1 = new Movie("Babylon", "188 min", "english");
$movie2 = new Movie("Kill Bill Volume 1", "111 min", "english");

// creo array Movies e ciclo:
$movies = [new Movie("Babylon", "188 min", "english"), new Movie("Kill Bill Volume 1", "111 min", "english")];

foreach ($movies as $movie) {
    echo $movie->getHtml();
}