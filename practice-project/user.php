
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-4 my-5">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <?php  ?>
                      <label for="name" class="form-label">Name:</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email Address:</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <select id="gender" name="gender" class="form-select">
                        <option value="" disabled selected>Choose Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="number" name="phone" class="form-control" id="phone">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                      </div>
                      <input type="submit" value="Send" class="btn btn-primary" name="submit">
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
