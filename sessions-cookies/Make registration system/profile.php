<?php

session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header("location: login.php");
}

?>

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
        <h5 class="card-title text-center user-information">User Information</h5>
        <div>
            <?php if(isset($_SESSION['id'])): ?>
                <div><?php $id=$_SESSION['id']; ?></div>
                <div><?php $users=$_SESSION['users']; ?></div>
                <div><?php for($i=0;$i<count($users);$i++): ?></div>
                    <div><?php if($users[$i]['id']==$id): ?></div>
                        <p class="card-text border user_info"><?php echo "User's id is: " . $_SESSION['user']=$users[$i]['id'] ?></p>
                        <p class="card-text border user_info"><?php echo "User's name is: " . $_SESSION['user']=$users[$i]['username']; ?></p>
                        <p class="card-text border user_info"><?php echo "User's email is: " . $_SESSION['user']=$users[$i]['email']; ?></p>
                    <div><?php endif; ?></div>
                <div><?php endfor; ?></div>
            <?php else: ?>
            <?php header("location: register.php"); ?>
            <?php endif; ?>
        </div>
        <a href="logout.php" class="btn btn-primary btn-logout">logout</a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>
