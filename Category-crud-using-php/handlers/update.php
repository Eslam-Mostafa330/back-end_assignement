<!-- Update -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .success{
        margin: 6px auto;
    }
    .my-alert{
        margin: 30px auto;
        width: 60%;
    }
</style>
</html>

<?php  
$connection = mysqli_connect("localhost", "root", "", "my_database");


if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
    $phone = $_POST['number'];

    mysqli_query($connection, "UPDATE `data` SET name='$name', address='$address', number='$phone' WHERE id=$id");
    echo '<div class="my-alert">
    <h3 class="alert alert-success text-center w-50 success" role="alert">Your data has been updated!</h3>
    <p class="alert alert-info text-center w-50 success" role="alert">In 5 seconds, you will be redirected to reading the database content...</p>
        </div>';
    header("refresh:5;url= ../read.php");
    die;
}
?>