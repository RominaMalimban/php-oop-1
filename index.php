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
}