<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-4">
        <div class="row">
            <div class="col-8 mx-auto">
            <h2>Shopping Cart</h2>
            <h4 class="m-2 pt-2 pb-5">Please provide your information:</h4>
            <div>
                <?php if(isset($_SESSION['errors'])): ?>
                    <?php foreach($_SESSION['errors'] as $error): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endforeach; ?>
                    <?php unset($_SESSION['errors']); ?>
                <?php endif; ?>
            </div>
                <table class="table">
                <form action="handlers/cart.php" method="POST">
                    <div class="mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" name="username" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Your Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address">Your Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <h5 class="m-2 pt-2">Please Choose your quantity:</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shirt</td>
                                <td>10$</td>
                            </tr>
                            <tr>
                            <td>Quantity</td>
                                <td><input type="text" name="quantity" class="form-control"></td>
                                <input type="hidden" name="product" value="Shirt">
                                <input type="hidden" name="price" value="10">
                            </tr>
                        </tbody>
                        <th><input type="submit" name="submit" value="Add to cart and checkout" class="btn btn-primary"></th>
                    </table>
                </form>
                </table>
            </div>
        </div>
    </div>
</body>
</html>