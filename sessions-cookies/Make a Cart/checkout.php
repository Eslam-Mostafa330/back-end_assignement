<?php 

session_start();



if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];

     $user_data=file_get_contents("data.json");
     $user_data_decode=json_decode($user_data,true);
     for($i=0;$i<count($user_data_decode);$i++){
         if($user_data_decode[$i]['id']==$id){
             $_SESSION['user']=$user_data_decode[$i];
             break;
         }
     }


    //  echo "<pre>";
    //  print_r($_SESSION['user']);

    }


?>


<?php




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
        <h5 class="card-title text-center user-information">Purchase Information</h5>
        <div>
            <?php if(isset($_SESSION['id'])): ?>
                <div><?php $id=$_SESSION['id']; ?></div>
                <div><?php $user_data=file_get_contents("data.json"); ?></div>
                <div><?php $user_data_decode=json_decode($user_data,true); ?></div>
                <div><?php for($i=0;$i<count($user_data_decode);$i++): ?></div>
                    <div><?php if($user_data_decode[$i]['id']==$id): ?></div>
                        <?php $_SESSION['user']=$user_data_decode[$i]; ?>
                        <p class="card-text border user_info"><?php echo "Your name is: " . $_SESSION['user']['username']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your email is: " . $_SESSION['user']['email']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your phone is is: " . $_SESSION['user']['phone']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your address is: " . $_SESSION['user']['address']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your selected product to purchase is: " . $_SESSION['user']['product']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your quantity was: " . $_SESSION['user']['quantity']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your total price is: " . $_SESSION['user']['quantity'] * $_SESSION['user']['price'] . "$"; ?></p>
                    <div><?php endif; ?></div>
                <div><?php endfor; ?></div>
            <?php else: ?>
            <?php  ?>
            <?php endif; ?>
        </div>
            <a href="update.php" class="btn btn-warning me-3">Update your purchase</a>
            <a href="delete.php" class="btn btn-danger">Delete your purchase</a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>
