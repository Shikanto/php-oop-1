<?php
require_once "./classes/Movie.php";

$newFilm1 = new Movie("Ciaone", "90 minuti", "commedia", "un set, un get e un costruct entrarono in un bar...");
//echo $newFilm -> getInfoFilm();

$newFilm2 = new Movie("Red Moon", "120 minuti", "Drammatico", "Guerra tra clan giapponese e vince il clan Red moon");
//echo $newFilm2 -> getInfoFilm();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Films</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1 class="mb-5"><?php echo $newFilm2 -> getInfoFilm(); ?></h1>
            <h1 class="mb-5"><?php echo $newFilm1 -> getInfoFilm(); ?></h1>

        </div>
    </div>
</body>
</html>