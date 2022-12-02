<!-- Read -->

<?php
$connection = mysqli_connect("localhost", "root", "", "my_database");
$result = mysqli_query($connection, "SELECT * FROM `data`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
        <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><a class="btn btn-warning" href="update-form.php?update=<?php echo $row['id']; ?>">Update</a></td>
                <td><a class="btn btn-danger" href="handlers/delete.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="create-form.php">Create new record?</a>
        </div>
</body>

</html>



