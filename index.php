<?php 
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
   $first_movie = new Movie('Terminator 2', 'James Cameron', 'Action', 1991);
   $second_movie = new Movie('The Matrix', 'Lana Wachowski', 'Action', 1999);
   var_dump($first_movie);
   var_dump($second_movie);

   var_dump($first_movie->getYear());
   var_dump($second_movie->getYear());
   ?>
</body>
</html>