<?php 

require_once './traits/actors.php';
require_once './models/genre.php';
require_once './models/movie.php';

// creazione dei film
$movies = [
    new Movie('Terminator 2', 'James Cameron', [
        new Genre('Action', 'The action genre is characterized by adrenaline-pumping scenes, fights, spectacular chases and explosions.'),
        new Genre('Sci-Fi', 'The science fiction genre deals with imaginative and futuristic concepts.')
    ], 1991),

    new Movie('Sons of the Empire', 'James Callahan', [
        new Genre('Historical', 'The historical genre tells about events, characters or eras of the past.')
    ], 2025)
];

// assegno gli attori
$movies[0]->setActors(['Arnold Schwarzenegger', 'Linda Hamilton', 'Edward Furlong']);
$movies[1]->setActors(['John Doe', 'Jane Doe']);

?>