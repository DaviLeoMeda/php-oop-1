<?php

class Movie{
    public $genre;
    public $title;
    public $description;
    public $lenght;

    public function __construct ($_genre, $_title, $_description, $_lenght){
        $this->genre = $_genre;
        $this->title = $_title;
        $this->description = $_description;
        $this->lenght = $_lenght;
    }
}

$blockbuster = [
    new Movie('Horror', 'The Deveoper assassin night', 'a crazy murder developer wants the city', '2 minutes');
    new Movie('Fantastic', 'The Deveoper knights', 'a gay brave knight developer try to save his houseband', '1500 hours');
    new Movie('Comedy', 'The Deveoper workout', 'a fat developer wants to be a bodybuilder', '120 minutes');
];

var_dump($blockbuster);
?>