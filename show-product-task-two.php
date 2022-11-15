<?php
#######################################################################################
                        //////// Task Four ////////

    $products = [
        ["product number 1",300,50],
        ["product number 2",250,1000],
        ["product number 3",30,1200],
        ["product number 4",1500,10],
        ["product number 5",450,300],
    ];

    foreach ($products as $product) {
        echo "The product name is: " . $product[0] . ", " . "price is: " .  $product[1] . ", " . "and the quantity is: " . $product[2] . "<br>";
    }

    echo "<hr>";

    $product = $_POST['product'];
    if (!empty($product)) {
        echo "<h1>$product</h1>";
    }else{
        return;
    }
    
#######################################################################################
?>