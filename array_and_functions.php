<?php
                ///////////// Start Array Assignment /////////////
#######################################################################################

//////// Task One ////////
## Write a PHP script which will display the colors in h2 ##

$colors = ["red","green","blue","black","white"];
for ($i = 0; $i < count($colors); $i++) {
    echo "<h2>$colors[$i]</h2>" . "<br>";
}

#######################################################################################

//////// Task Two ////////
##  Display previous array in ul > li ##

$colors = ["red","green","blue","black","white"];

for ($i = 0; $i < count($colors); $i++) {
    echo '<pre>';
    print_r("<ul><li>$colors[$i]</li></ul>");
    echo '</pre>';

    ##### Another way to display this array ####
    // echo "<ul><li>$colors[$i]</li></ul>" . "<br>";
}

#######################################################################################

//////// Task Three ////////
## Add three colors to the previous array and display colors in h3 ##

$colors = ["red","green","blue","black","white"];

array_push($colors, "purple", "orange", "brown");

foreach ($colors as $color) {
    echo '<pre>';
    print_r("<h3>$color</h3>");
}

#######################################################################################

//////// Task Four ////////
## Display this array in h3 ##

$numbers = [10,20,30,40,50];

for ($i = 0; $i < count($numbers); $i++) {
    $result = $numbers[$i];
    echo '<pre>';
    print_r("<h3>$result</h3>");
}


#######################################################################################

//////// Task Five ////////
## Make a new array with these items plus 5 ##

$numbers = [10,20,30,40,50];

$array_plus_five = [];

for ($i = 0; $i < count($numbers); $i++) {
    $array_plus_five[] = $numbers[$i] + 5;
}

echo '<pre>';
print_r($array_plus_five);

#######################################################################################

//////// Task Six ////////
## Make a new array with these items divided by 3 ##

$numbers = [10,20,30,40,50];

$array_divided_by_three = [];

for ($i = 0; $i < count($numbers); $i++) {
    $array_divided_by_three[] = round($numbers[$i] / 3, 1);
}

echo '<pre>';
print_r($array_divided_by_three);

#######################################################################################

//////// Task Seven ////////
## add these items 60,70,80 to the array to ##

$numbers = [10,20,30,40,50];

array_push($numbers, 60, 70, 80);

echo '<pre>';
print_r($numbers);

#######################################################################################

//////// Task Eight ////////
## display this array in the card ##

$users = [
    ["Mohamed Ali", 20],
    ["Rana Ahmed", 19],
    ["Maged Khaled", 25],
];

foreach ($users as $user) {
    // if condition to differentiate between males and females, and thus displays the appropriate output
    if ($user[0] == "Rana Ahmed") {
        echo "Username is: " . $user[0] . ", and her age is: " . $user[1] . '<hr>';
    }else{
        echo "Username is: " . $user[0] . ", and his age is: " . $user[1] . '<hr>';
    }
    
    // Another way to display users and their ages as normal array
    echo '<pre>';
    print_r($user);
}

#######################################################################################

//////// Task Nine ////////
## Display these items in table ##

    $employees = [
        ["Mohamed Ali","mohamad@eraasoft.com","01024256993",2500],
        ["Reham Mohamad","reham@eraasoft.com","01122255448",3000],
        ["Maged Hesham","maged@eraasoft.com","01024213361",4000],
        ["Ali Mahmoud","ali@eraasoft.com","01142547485",2000],
        ["Hader Elsayed","nader@eraasoft.com","01123659854",1000],
    ];

    foreach ($employees as $employee) {
        // if condition to differentiate between males and females, and thus displays the appropriate output
        if ($employee[0] == "Reham Mohamad" || $employee[0] == "Hader Elsayed") {
            echo "Employee name is: " . $employee[0] . ", her Email Address is: " . $employee[1] . ", her Phone is: " . $employee[2] . " and her Salary is: " . $employee[3] . '<hr>';
        }else{
            echo "Employee name is: " . $employee[0] . ", his Email Address is: " . $employee[1] . ", his Phone is: " . $employee[2] . " and his Salary is: " . $employee[3] . '<hr>';
        }
        
    }
    
                ///////////// End Array Assignment /////////////
    #######################################################################################
                ///////////// Start Functions Assignment /////////////

//////// Task One ////////
##  Write a PHP function return any integer number plus 5 ##

function plus_five($number) {
    // If condition to check if the given input is number and integer
    if (is_numeric($number) && is_integer($number)) {
        $result = $number + 5;
        return $result;
    }else{
        echo "Input must consist of a number and an integer";
    }
}
// Call the function and use a random number, for example 25
echo plus_five(25);

#######################################################################################

//////// Task Two ////////
## Write a php function to check if the string is greater than fixed number or not
## - Function take two parameters ( string , number ) ##

function greater_or_not($string, $number) {
    if (strlen($string) > $number) {
        echo "String is greater than number";
    }elseif (strlen($string) < $number) {
        echo "Number is greater than string";
    }else{
        echo "String and Number are equal";
    }
}
greater_or_not("Hello from the other side!", 27);

#######################################################################################

//////// Task Three ////////
## Write a php function to check if the number is even or odd ##

function even_or_odd($number_to_check) {
    if ($number_to_check %2 == 0) {
        echo "Number is Even";
    }elseif ($number_to_check %2 != 0) {
        echo "Number is Odd";
    }
}
even_or_odd(9);

#######################################################################################

//////// Task Four ////////
## Write a php function to check if the data is valid in array or not 
## - Function take two parameters ( array , item) ##

function is_valid($array, $item) {
    // A condition to check if the given argument is an array or not, if it was an array,
    // will execute the nested condition, otherwise will display an error message to the user.
    if (is_array($array)) {
        if (in_array($item, $array)) {
            echo "The data is valid.";
        }else{
            echo "Data not found.";
        }
    }else{
        echo "This argument is not valid, only arrays are available";
    }
}
is_valid(["HTML", "CSS", "Javascript", "MysQl", "PHP"], "PHP");

#######################################################################################

//////// Task Five ////////
## Write a php function to replace in a string with specific word and return true
## if any replace occurred , otherwise return false
## -Function take two parameters ( string , word ) ##

// function replace_in_string($word, $string) {
//     $output = str_replace($word, "PHP", $string, $replaces_count);
//     echo $output . '<br>';
//     if ($replaces_count == true) {
//         echo "Word found and replaced";
//     }else{
//         echo "Cannot find a suitable word to replace";
//     }
// }
// replace_in_string("HTML", "HTML is one my favorite coding language");

/////////
# -Another solution using strpos function
function replace_in_string($word, $string) {
    $output = str_replace($word, "PHP", $string);
    echo $output . '<br>';
    if (strpos($string, $word) !== false) {
        echo "Word found and replaced";
    }else{
        echo "Cannot find a suitable word to replace";
    }
}
replace_in_string("HTML", "HTML is one my favorite coding language");

#######################################################################################

//////// Task Six ////////
## Write a php function that take two parameters 
## -First name and last name 
## -Return full name ( concatenate first and last name )

function full_name($first_name, $last_name) {
    $full_name = $first_name . $last_name;
    return $full_name;
}
echo "Hello " . full_name("Islam", " Mostafa,") . " have a nice day!";

                ///////////// End Functions Assignment /////////////
#######################################################################################

?>
