<?php 
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/game.php";

$croquette = new Food("cibo", 20, 200, 1, "Crocchette", "Salmone");
var_dump($croquette);

$ball = new Game("palla giocattolo", 5, 150, 1);
var_dump($ball);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    
</body>
</html>