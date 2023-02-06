<?php 
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Toys.php';
    require_once __DIR__ . '/Models/Cart.php';
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            $bocconcini = new Food ('Bocconcini', 15.99, 000011112222, 'cat', '06/02/2023', 500);
            $cart1 = new Cart();
            $cart1->setAddProduct($bocconcini);
        ?>
        <h1>PRODOTTI</h1>
        <h3>
            <?php 
                echo $bocconcini->getName();
            ?>
        </h3>
        <p>
            <?php 
                echo $bocconcini->getPrice();
            ?>
            <br>
            <?php 
                echo $bocconcini->getCategory();
            ?>
            <br>
            <?php 
                echo $bocconcini->getWeight();
            ?>
            <br>
            <?php 
                echo $cart1->getTotalPrice();
            ?>
        </p>
        
        
    </body>
</html>