<?php 

class Movie {
    public $title;
    public $director;
    public $genre;
    public $year;

    //costruttore
    public function __construct($_title, $_director, Genre $_genre, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    //metodo
    public function getYear() {
        return $this->year <= 2000 ? 'Films of the last century' : 'Films of the current century';
    }
}

?>