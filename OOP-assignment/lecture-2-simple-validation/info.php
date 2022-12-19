<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .name, .email {
            color: green;
        }
        .title {
            color: #2196f3;
        }
        .delete-btn {
            width: 57%;
            margin-left: 58px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card" style="width: 19rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center title">User Information</h5>
                        <?php if(isset($_SESSION['name']) && isset($_SESSION['email'])): ?>
                            <p class="pt-2 name">Name: <?php echo $_SESSION['name']; ?></p>
                            <p class="email">Email: <?php echo $_SESSION['email']; ?></p>
                        <?php endif; ?>
                        <a class="btn btn-danger delete-btn" href="delete-info.php" class="card-link">Delete User Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>