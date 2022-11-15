<?php
#######################################################################################
                        //////// Task One ////////

##  Make a form with these inputs ( name , email )
# -Check if the user submit the form or not 
# -Get data from super global $_GET and put assign these data to variables 
# -Display these variables in h3 ##

$name = $_GET['name'];
$email = $_GET['email'];

if (!empty($name) && !empty($email)) {
    echo "The user's name is: " . "<h3>$name</h3>" . " and their email is: " . "<h3>$email</h3>";
}else{
    echo "Before sending the data, please complete the form";
}

#######################################################################################
?>