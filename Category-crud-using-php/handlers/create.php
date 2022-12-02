<!-- Create -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<?php
session_start();
$errors = [];
$success=[];
$connection = mysqli_connect("localhost", "root", "", "my_database");

$id = "";
$name = "";
$address = "";
$phone = "";

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['number'];

    // validation
    if (empty($name)) {
        $errors[] = "Please type your name";
    }elseif(empty($address)) {
        $errors[] = "Address field is required";
    }elseif(empty($phone)) {
        $errors[] = "Number field is required";
    }

    if (empty($errors)) {
        $data = mysqli_query($connection, "INSERT INTO `data` (name, address, number) VALUES ('$name', '$address', '$phone')");
        $success[] = "The data has been saved successfully!";
        $_SESSION['success'] = $success;
        $_SESSION['data'] = $data;
        header("location: ../create-form.php");
    }else{
        $_SESSION['errors'] = $errors;
        header("location: ../create-form.php");
    }

    }else{
        $errors[]= "Request method can not be manipulated!";
        $_SESSION['errors'] = $errors;
        header("location: ../create-form.php");
    }
?>


