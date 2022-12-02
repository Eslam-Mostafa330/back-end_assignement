<!-- Update -->

<?php
$connection = mysqli_connect("localhost", "root", "", "my_database");
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $record = mysqli_query($connection, "SELECT * FROM `data` WHERE id=$id");

    if (isset($record)) {
        $value = mysqli_fetch_array($record);
        $id = $value['id'];
        $name = $value['name'];
        $address = $value['address'];
        $phone = $value['number'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <form action="handlers/update.php" method="POST">
                    <div class="mb-3">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="<?php echo $name; ?>" type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input value="<?php echo $address ?>" type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Number</label>
                        <input value="<?php echo $phone ?>" type="text" name="number" id="number" class="form-control">
                    </div>
                    <div class="mb-3 d-inline-block me-2">
                        <input type="submit" value="Update" name="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>