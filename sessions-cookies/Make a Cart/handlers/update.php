<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .user-information{
            color: #2196f3;
            font-weight: bold;
            font-size: 1.4rem;
        }
        .user_info {
            padding: 10px;
            color: green;
            margin: -7px;
            font-size: 1.1rem;
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
        .update, .delete, .checkout{
            position: absolute;
            top: 350.1px;
            margin: auto;
            display: flex;
            transform: translateX(50%);
        }
        .delete{
            top: 390.4px;
            transform: translateX(68%);
        }
        .checkout{
            top: 450.1px;
            transform: translateX(132%);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
  <div class="col-sm-6 m-5 p-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center user-information">Updated Purchase Information</h5>
            <?php if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST"): ?>
                <?php if (isset($_POST['quantity'])): ?>
                    <?php $new_quantity = $_POST['quantity']; ?>
                    <?php if(array_key_exists('quantity', $_SESSION['users'])): ?>
                        <?php $updated_information = explode(" ", $new_quantity); ?>
                        <?php $final_update_information = array_replace($_SESSION['users'], $updated_information); ?>
                        <p class="card-text border user_info"><?php echo "Your selected product to purchase is: " . $_SESSION['user']['product']; ?></p>
                        <p class="card-text border user_info"><?php echo "Your new quantity is: " . $final_update_information[0]; ?></p>
                        <p class="card-text border user_info"><?php echo "New total price is: " . $final_update_information[0] * $_SESSION['user']['price'] . "$"; ?></p>

                    <div><?php endif; ?></div>
                <div><?php endif; ?></div>
            <div><?php endif; ?></div>
        </div>
            <a href="../new-checkout.php" class="btn btn-primary checkout w-55">Checkout Now</a>
            <a href="update.php" class="btn btn-warning w-55 update">Update another quantity?</a>
            <a href="delete.php" class="btn btn-danger w-55 mt-2 delete">Delete your purchase</a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>
