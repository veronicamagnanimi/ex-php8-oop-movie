<?php 

require_once './models/genre.php';
require_once './models/movie.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>Movie</h1>

    <!-- oggetti Movie -->
   <?php 
   $first_movie = new Movie('Terminator 2', 'James Cameron',
    new Genre ('Action', 'The action genre is characterized by adrenaline-pumping scenes, figths,spectacular chases and explosions.'), 1991);
   $second_movie = new Movie('Sons of the Empire', 'James Callahan',
   new Genre ('Historical', 'The historical genre tells about events, characters or eras of the past.'), 2025);
   var_dump($first_movie);
   var_dump($second_movie);

   var_dump($first_movie->getYear());
   var_dump($second_movie->getYear());
   ?>
</body>
</html>