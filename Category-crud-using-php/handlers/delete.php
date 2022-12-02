<!-- Delete -->

<?php
$connection = mysqli_connect("localhost", "root", "", "my_database");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($connection, "DELETE FROM `data` WHERE id=$id");
    header("location: ../read.php");
}

?>