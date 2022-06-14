<?php 
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/game.php";
require_once __DIR__ . "/accessory.php";
require_once __DIR__ . "/user.php";


$croquette = new Food("cibo", 20, 200, 2, "Crocchette", "Salmone");

$ball = new Game("palla giocattolo", 5, 150, 2);

$collar = new Accessory("collare", 15, 50, 1);

$gabriele = new User("Gabriele", "Bianchi", "gabry@gmail.com");
$gabriele->addCart($ball);
$gabriele->addCart($collar);
$gabriele->addCart($croquette);
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
    <h2>Prodotti</h2>
    <ul>
        <li><?php echo $croquette->productInfo(); ?></li>
        <li><?php echo $ball->productInfo(); ?></li>
        <li><?php echo $collar->productInfo(); ?></li>
    </ul>

    <h2>Carrello di <?php echo $gabriele->name; ?>:</h2>
    <ul>
        <?php foreach($gabriele->cart as $item){?>
            <li>
            <?php echo " Tipo: " .$item->type . " " . " Quantità: " . $item->quantity . " Prezzo: " . $item->productPrice() . "€"; ?>
            </li>
        <?php } ?>
        <li>
            <p>Sconto%: <?php echo $gabriele->discount();?></p>
            <h3>Prezzo totale: <?php echo $gabriele->totalPrice();?>€</h3>
        </li>
    </ul>

</body>
</html>