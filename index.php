<?php
require_once './database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            height: 100%;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body>
<div class="container mt-5">
        <h1 class="text-center mb-4">Movies</h1>
        
        <div class="row justify-content-center">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow-sm mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php $movie->title ?></h5>
                            <h6 class="card-subtitle text-muted">Directed by <?php echo $movie->director ?></h6>
                            <p class="card-text"><strong>Year:</strong> <?php echo $movie->year ?></p>
                            
                            <!-- Generi -->
                            <p class="card-text"><strong>Genres:</strong> 
                                <?php 
                                $genreNames = [];
                                foreach ($movie->genres as $genre) {
                                    $genreNames[] = $genre->name;
                                }
                                echo implode(', ', $genreNames);
                                ?>
                            </p>

                            <!-- Attori -->
                            <p class="card-text"><strong>Actors:</strong> <?php echo implode(', ', $movie->getActors()) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    


</body>

</html>