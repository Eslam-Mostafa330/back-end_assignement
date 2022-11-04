<?php

    ///////// Task One /////////
    ## Write a PHP script which will display numbers from 1 to 100 in h2 ##

    $i = 1;
    while ($i <= 100) {
        echo "<h2>$i</h2>" . "<br>";
        $i++;
    }

    #################################################################################

    ///////// Task Two /////////
    ## Type even numbers from 1 to 100 in paragraph using while ##

    $i = 1;
    while ($i <= 100) {
        if ($i %2 == 0) {
            echo "<p>$i</p>" . "<br>";
        }
        $i++;
    }

    #################################################################################

    ///////// Task Three /////////
    ## Write php script witch will print odd numbers from 1 to 50 in span ##

    for ($i = 1; $i <= 50; $i++) {
        if ($i %2 != 0) {
            echo "<span>$i</span>" . "<br>";
        }
    }

    #################################################################################

    ///////// Task Four /////////
    ## Write php script that print all chars from this string ##

    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, 
    aperiam.";

    $i = 0;
    while ($i < strlen($string)) {
        echo $string[$i] . "\n";
        $i++;
    }

    #################################################################################

    ///////// Task Four /////////
    ## Write php script to print numbers that accept division by 5 in h3 ##

    $i = 0;
    do {
        if ($i %5 == 0) {
            echo "<h3>$i</h3>" . "<br>";
        }
        $i++;
    } while ($i <= 100);

    #################################################################################

    ///////// Task Five /////////
    ## Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. 
    ## There will be no hyphen(-) at starting and ending position. ##
    
    $i = 1;
    while ($i <= 10) {
        if (strlen($i) -1) {
            echo $i;
        }else{
            echo $i . "-";
        }
        $i++;
    }

    #################################################################################

    ///////// Task Six /////////
    ## Write php script to get the submission for the numbers between 1 and 20 ##

    $sum = 0;
    for ($i = 1; $i <= 20; $i++) {
        $sum += $i;
    }   
    echo "The summation from 1 to 20 = " . $sum;

    #################################################################################

    ///////// Task Seven /////////
    ## Write php script to display numbers between 1 and 50 and ##
    ##If the number is prime ( type this number is prime )
    ##If number is even - type this number is even 
    ##If number is odd - type this number is odd 

    $i = 1;
    while ($i <= 50) {
        if ($i %2 == 0) {
            echo $i . " => This number is even" . "<br>";
        }elseif($i %2 != 0) {
            echo $i . " => This number is odd" . "<br>";
        }
        for ($j = 2; $j < $i; $j++) {
            if($i % $j == 0) {
                break;
            }
        }
        if($i == $j) {
            echo $i . " => This number is prime" . "<br>";
        }
        $i++;
    }

    #################################################################################

    ///////// Task Eight /////////
    ##  Write a php script to display a square 10 * 10 ( from 1 to 100 ) ##

    for ($row = 1; $row <= 10; $row++) { 
        for ($col = 1; $col <= 10; $col++) { 
                $square = $col * $row;
                echo $square . "\n";
            }
            
            echo "<br>";
        }

    #################################################################################

    ///////// Task Nine /////////
    ## Draw a triangle from (#) using for loop ##

    $triangle = 10;
    for ($i = 0; $i <= $triangle; $i++) { 
        for ($j = 0; $j < $i; $j++) { 
                echo "#";
            }
            echo "<br>";
        }

    #################################################################################
    
    ///////// Task Ten /////////
    ## numbers = "12-23-34-45";
    ## Display the previous string ##

    $numbers = "12-23-34-45";

    $i = 0;
    while ($i < strlen($numbers)) {
        echo $numbers[$i];
        $i++;
    }


?>