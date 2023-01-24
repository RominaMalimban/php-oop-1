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
            . "<h3>Running Time: " . $this->runningTime . "<h3>"
            . "<h3>Language " . $this->language . "</h3>";
    }
}

//Istanzio due oggetti `Movie` e stampo a schermo i valori delle relative proprietà:
$babylon = new Movie("Babylon", "188 min", "english");
$killBill = new Movie("Kill Bill Volume 1", "111 min", "english");

// creo array Movies e ciclo con foreach:
$movies = [$babylon, $killBill];

foreach ($movies as $movie) {
    echo $movie->getHtml();
}