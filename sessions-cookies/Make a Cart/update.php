<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase Update</title>
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
  <form action="handlers/update.php" method="POST">
<div class="container">
    <div class="row">
      <div class="col-sm-6 m-5 p-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center user-information">Purchase Information</h5>
              <div>
                <?php if(isset($_SESSION['id'])): ?>
                  <div><?php $id=$_SESSION['id']; ?></div>
                  <div><?php $user_data=file_get_contents("data.json"); ?></div>
                  <div><?php $user_data_decode=json_decode($user_data,true); ?></div>
                  <div><?php for($i=0;$i<count($user_data_decode);$i++): ?></div>
                    <div><?php if($user_data_decode[$i]['id']==$id): ?></div>
                      <?php $_SESSION['user']=$user_data_decode[$i]; ?>
                      <p class="card-text border user_info"><?php echo "Your product is: " . $_SESSION['user']['product']; ?></p>
                      <p>Need to change quantity?</p>
                      <label class="user_info" for="quantity">Quantity is:</label>
                      <input id="quantity" class="card-text border user_info" name="quantity" type="number" min="1" max="30" value="<?php echo $_SESSION['user']['quantity']; ?>">
                    <div><?php endif; ?></div>
                  <div><?php endfor; ?></div>
                <?php endif; ?>
                  <input type="submit" name="submit" value="Update Now" class="btn btn-primary mt-3">
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
  </form>
</body>
</html>

