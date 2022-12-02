<!-- Create -->

<?php session_start();  ?>
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
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <?php if(isset($_SESSION['errors'])): ?>
                    <?php foreach($_SESSION['errors'] as $error): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error; ?>
                        </div>
                    <?php endforeach; unset($_SESSION['errors']); ?>
                <?php endif; ?>
                <?php if(isset($_SESSION['success'])): ?>
                    <?php foreach($_SESSION['success'] as $success): ?>
                        <div class="alert alert-success text-center">
                            <?php echo $success; ?>
                        </div>
                    <?php endforeach; unset($_SESSION['success']); ?>
                <?php endif; ?>
                <form action="handlers/create.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Number</label>
                        <input type="text" name="number" id="number" class="form-control">
                    </div>
                    <div class="mb-3 d-inline-block me-2">
                        <input type="submit" value="Send" name="submit" class="btn btn-primary">
                    </div>
                    <div class="d-inline-block">
                        <a class="btn btn-secondary" href="read.php">Read the data</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>