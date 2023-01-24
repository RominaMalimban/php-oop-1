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
        return "Title: " . $this->title
            . "<br>Running Time: " . $this->runningTime
            . "<br>Language " . $this->language;
    }
}

//Istanzio due oggetti `Movie` e stampo a schermo i valori delle relative proprietà:

// Oggetto 1:
$movie1 = new Movie("Babylon", "188 min", "english");
$movie2 = new Movie("Kill Bill Volume 1", "111 min", "english");

echo $movie1->getHtml();
echo $movie2->getHtml();