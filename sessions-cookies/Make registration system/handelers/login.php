<?php 
    session_start();
    $errors=[];

    if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $userData=file_get_contents("../users.json");
        $userDataDecode=json_decode($userData,true);
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            foreach ($userDataDecode as $user) {
                $username = $user['username'];
                $email = $user['email'];
                $stored_password = $user['password'];
                $remember_me = $_POST['remember'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $stored_password;
                $given_password = sha1($_POST['password']);
                if ($email == $_POST['email'] && hash_equals($stored_password, $given_password)) {
                    header("location: ../profile.php");
                    
                }else{
                    $errors[] = "Not matching password or email. Please try again";
                    $_SESSION['errors'] = $errors;
                    header("location: ../login.php");
                    die;
                }
                
                if (!empty($remember_me)) {
                    $name2 = $_COOKIE['name'];
                    $email2 = $_COOKIE['email'];
                    $new_name = sha1($name2);
                    $new_email = sha1($email2);
                    setcookie("user_info", $new_name . $new_email, time()+60*60, "/");
                }else{
                    header("location: ../profile.php");
                }
            }
        }else{
            $errors[] = "Email and Password fields are required";
            $_SESSION['errors'] = $errors;
            header("location: ../login.php");
        }
    }else{
        $errors[] = "Manipulating the request method not allowed!";
        $_SESSION['errors'] = $errors;
        header("location: ../login.php");
    }

?>
