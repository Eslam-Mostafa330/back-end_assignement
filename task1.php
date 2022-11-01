<?php
        /////////////////// Task One (Ages Task) ///////////////////

    // Storing random numbers on variables
    $age_one = rand(25, 30);  
    $age_two = rand(25, 30);
    $age = $age_one;

    // Condition to compare between ages
    if ($age_one > $age_two) {
        echo "Ahmed is older than Mohamed";
    }elseif ($age_two > $age_one) {
        echo "Mohamed is older than Ahmed";
    }elseif ($age_one == $age_two) {
        echo "age of Ahmed and Mohamed is " . $age;
    }

    #################################################################################

        /////////////////// Task Two (Dealing with Strings) ///////////////////

    $article = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Doloremque illo, vero officiis laudantium enim minus corrupti ipsam! 
    Veniam culpa a qui, nobis pariatur placeat beatae dolores aperiam 
    consequatur deserunt temporibus? Pariatur nulla vel natus necessitatibus 
    nam exercitationem eligendi expedita, provident distinctio non praesentium 
    officiis quaerat veniam, laborum id accusamus voluptas suscipit. 
    Accusamus, sequi cumque veniam eius atque fuga modi minus earum repellat 
    tenetur delectus beatae explicabo natus corporis hic qui amet obcaecati 
    suscipit, repudiandae vero sit doloremque, consequuntur aperiam? Facere 
    amet aspernatur debitis, quisquam animi suscipit accusantium id architecto 
    nobis, quis pariatur perferendis, molestiae distinctio quia ut beatae 
    dicta laudantium excepturi natus! Mollitia culpa magni voluptatum maiores 
    nulla non illo pariatur libero ipsam numquam, assumenda cumque 
    reprehenderit exercitationem eos accusantium animi, at fugit doloremque 
    iusto dolorum magnam officiis. Optio cumque dolor architecto blanditiis, 
    fugiat animi tenetur. Asperiores excepturi atque earum possimus est 
    consequatur architecto exercitationem inventore tempore nostrum dolor 
    dolorum corrupti numquam totam, quae, reiciendis dicta, illum cupiditate 
    vel ea enim optio. Fugiat ipsa error, deserunt officiis suscipit numquam 
    rerum dignissimos rem, nihil quis amet aliquid temporibus? Similique 
    numquam consequatur labore molestiae sed earum dolor, explicabo suscipit 
    in laboriosam ut, natus architecto. Perspiciatis quia molestiae, eos 
    voluptatibus numquam id at?";

    // Storing random pieces of strings on two variables
    $string_one = substr($article, mt_rand(0, 90), mt_rand(0, 90));
    $string_two = substr($article, mt_rand(30, 120), mt_rand(30, 120));

    // Condition to compare strings and display the required output 
    if (strlen($string_one) > 20 && strlen($string_one) < 40) {
        echo "String is weak";
    } elseif (strlen($string_one) > 20 && strlen($string_one) < 80) {
        echo "String is good";
    } elseif (strlen($string_one) > 80) {
        echo "String is very good";
    }

    
    // Comparing the length of the first and second string
    $compare = strncasecmp($string_one, $string_two, 1);

    switch (true) {
        case $compare > 0:
            echo "First is greater than second";
            break;
        case $compare < 0:
            echo "First is smaller than second";
            break;
        case $compare == 0:
            echo "First is equal to second";
            break;
    }

    ###############################################################################

        /////////////////// Task Three (Calculator Application) ///////////////////

    // Taking inputs from users and storing them in variables
    $firstNumber  = (int)readline("Please enter your first number: ");
    $secondNumber = (int)readline("Please enter your second number: ");
    $operation    = readline("What operation will you use? ");

    // Storing the last result on a variable with a default value of 0
    $result = 0;

    // The calculation condition
    if ($operation == '+') {
        $result = $firstNumber + $secondNumber;
    }elseif ($operation == '-') {
        $result = $firstNumber - $secondNumber;
    }elseif ($operation == '*') {
        $result = $firstNumber * $secondNumber;
    }elseif ($operation == '/') {
        $result = $firstNumber / $secondNumber;
    }elseif ($operation == '**') {
        $result = $firstNumber ** $secondNumber;
    }elseif ($operation == '%') {
        $result = $firstNumber % $secondNumber;
    }
    echo "Your result is: //{$result}\\\ \n Thank you for using our application!";


    #######################################################################################

        /////////////////// Task Four (Program to check student degree) ///////////////////

    // Taking an integer input number from the user and storing it in a variable
    $student_degree = (int)readline("Please enter the student's degree as an integer number: ");

    switch (true) {
        case $student_degree >= 50 && $student_degree < 65:
            echo "The student's grade is: Acceptable.";
            break;
        case $student_degree >= 65 && $student_degree < 75:
            echo "The student's grade is: Good.";
            break;
        case $student_degree >= 75 && $student_degree < 85:
            echo "The student's grade is: Very Good.";
            break;
        case $student_degree >= 85:
            echo "The student's grade is: Excellent.";
            break;
        default:
            echo "Only positive numbers of 50 or more are allowed";
            break;
    }
    
    #####################################################################################

    /////////////////// Task Five (Checking from strings) ///////////////////

    $description = "no pain , no gain ";

    // Condition to check if the word "pain" or the word "gain" exists
    if (str_contains($checker, "pain")) {
        echo "success word";
    }elseif (str_contains($checker, "gain")) {
        echo "success word";
    }else{
        echo "wrong word";
    }

    // Another solution for "Task Five" which if we consider that we need to take input
    // from the user to determine if it exists on $description string or not.
    $checker = readline("word here: ");

    // checking if the user's input exists on the string and storing the result on a variable
    $result = str_contains($description, $checker);

    if ($result == 1) {
        echo "found";
    }elseif ($result == 0) {
        echo "not found";
    }
?>