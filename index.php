<?php
  require_once __DIR__."/Movie.php";

  $avengers = new Movie("Avengers", 2018);
  $matrix = new Movie("Matrix", 2000);
  $interstellar = new Movie("Interstellar", 2015);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    
    <h1><?php echo $avengers->getInfo()?></h1>
    <h1><?php echo $matrix->getInfo()?></h1>
    <h1><?php echo $interstellar->getInfo()?></h1>



</body>
</html>