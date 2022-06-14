<?php 
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/game.php";
require_once __DIR__ . "/accessory.php";

$croquette = new Food("cibo", 20, 200, "Crocchette", "Salmone");
var_dump($croquette);

$ball = new Game("palla giocattolo", 5, 150);
var_dump($ball);


$collar = new Accessory("collar", 15, 50);
var_dump($collar);
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
    <h2>PRODOTTI</h2>
    <ul>
        <li><?php echo $croquette->productInfo(); ?></li>
        <li><?php echo $ball->productInfo(); ?></li>
        <li><?php echo $collar->productInfo(); ?></li>
    </ul>

    <h2>CARRELLO</h2>
</body>
</html>