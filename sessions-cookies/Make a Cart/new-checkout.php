<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .user-information{
            color: #2196f3;
            font-weight: bold;
            font-size: 1.3rem;
        }
        .user_info {
            padding: 7px;
            color: green;
        }
        .btn-logout{
            justify-content: center;
            margin: auto;
            display: flex;
            width: 23%;
        }
        .btn-logout:hover{
            background-color: #2196f3;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
  <div class="col-sm-6 m-5 p-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center user-information">Purchase Information</h5>
        <div>
            <p class="card-text border user_info"><?php echo "Your name is: " . $_SESSION['user']['username']; ?></p>
            <p class="card-text border user_info"><?php echo "Your email is: " . $_SESSION['user']['email']; ?></p>
            <p class="card-text border user_info"><?php echo "Your phone is is: " . $_SESSION['user']['phone']; ?></p>
            <p class="card-text border user_info"><?php echo "Your address is: " . $_SESSION['user']['address']; ?></p>
            <p class="card-text border user_info"><?php echo "Your selected product to purchase is: " . $_SESSION['user']['product']; ?></p>
            <p class="card-text border user_info"><?php echo "Your quantity was: " . $_SESSION['update'][0]; ?></p>
            <p class="card-text border user_info"><?php echo "Your total price is: " . $_SESSION['update'][0] * $_SESSION['user']['price'] . "$"; ?></p>
        </div>
        <a href="delete.php" class="btn btn-danger mt-3">Delete your purchase</a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>
