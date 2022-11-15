<?php
#######################################################################################
                        //////// Task Two ////////

//////// Task Two ////////
## Make three links that send data through these links 
# -The first link send ( name=ameen )
# -The second link send (email=ameen@gmail.com)
# -The third link send (phone=01142565236)
# -Receive these data and display them in h3

$data = $_GET['data'];
if ($data == "ameen") {
    echo "Username is: " . "<h3>$data</h3>";
    return;
}elseif ($data == "ameen@gmail.com") {
    echo "User's email is: " . "<h3>$data</h3>";
    return;
}elseif ($data == "01142565236") {
    echo "User's phone is: " . "<h3>$data</h3>";
}

#######################################################################################
?>