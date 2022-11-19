
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
        .key{
            display: inline-block;
            color: #2196f3;
            font-weight: bold;

        }
        .value{
            display: inline-block;
            color: #009688;

        }
        .btn-register{
            justify-content: center;
            margin: auto;
            display: flex;
            width: 35%;
        }
        .btn-register:hover{
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
        <p class="card-text"><?php foreach($_GET as $key => $value): ?></p>
        <p class="card-text key"><?php echo $key ?></p>
        <p class="card-text value"><?php echo ": " . $value; ?></p>

        <p class="card-text"><?php endforeach; ?></p>
        <a href="user.php" class="btn btn-primary btn-register">Register New User</a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>