<?php 
require_once __DIR__ . "/Movie.php";
require_once __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Movie</title>
  <style>
    .movie{
      padding: 20px 0;
    }
  </style>
</head>
<body>
<div>
  <?php foreach($movies as $movie) : 
  $new_movie = new Movie($movie["title"], $movie["date"], $movie["vote"], $movie["genre"], $movie["description"])
  ?>
  <div class="movie">
    <h3><?php echo $new_movie->title ?></h3>
    <h5><?php echo $new_movie->date ?></h5>
    <h4>Voto: <?php echo $new_movie->vote ?>/10</h4>
    <h4><?php echo $new_movie->genre ?></h4>
    <p>Descrizione: <?php echo $new_movie->getExcept() ?></p>
  </div>
  <?php endforeach; ?>
</div>
</body>
</html>