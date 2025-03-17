<?php 

class Movie {
    public $title;
    public $director;
    public $genres;
    public $year;

    //costruttore
    public function __construct($_title, $_director, array $_genres, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    //metodo
    public function getYear() {
        return $this->year <= 2000 ? 'Films of the last century' : 'Films of the current century';
    }
}

?>