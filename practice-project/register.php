<?php
    include 'validation.php';

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        foreach ($_POST as $key => $value) {
            $$key = sanitizeInput($value);
        }

        // Name Validation
        if (!inputRequired($name)) {
            $errors[] = "Name field is required" . "<br>";
        }elseif (!minVal($name, 3)) {
            $errors[] = "The name must be at least 3 characters" . "<br>";
        }elseif (!maxVal($name, 25)) {
            $errors[] = "The name cannot exceed 25 characters" . "<br>";
        }

        // Email Validation
        if (!inputRequired($email)) {
            $errors[] = "Email field is Required" . "<br>";
        }elseif (!emailVal($email)) {
            $errors[] = "Please type a valid email" . "<br>";
        }

        // Phone Validation
        if (!inputRequired($phone)) {
            $errors[] = "Phone field is required" . "<br>";
        }

        // Password Validation
        if (!inputRequired($password)) {
            $errors[] = "Password field is required" . "<br>";
        }elseif (!minVal($password, 6)) {
            $errors[] = "Password length must be at least 6 characters.  Please try again" . "<br>";
        }elseif (!maxVal($password, 20)) {
            $errors[] = "Password length cannot exceed 20 characters. Please try again" . "<br>";
        }

        // Gender Validation
        if (isset($_POST['submit'])) {
            if (!empty($gender)) {
                $array = explode(" ", $gender);
                if (gender("male", $array) && gender("female", $array)) {
                    $errors[] = "Gender values can not be manipulated!" . "<br>";
                }
            }else{
                $errors[] = "One of the two gender values must be selected" . "<br>";
            }
        }

        // Store the data on json file if no errors occurred
        if (empty($errors)) {
            $users = [
                "id"       => rand(10000, 100000),
                "name"     => $name,
                "email"    => $email,
                "gender"   => $gender,
                "phone"    => $phone,
                "password" => sha1($password)
            ];
            $data = json_decode(file_get_contents("users_file.json", true));
            $data[] = $users;
            file_put_contents("users_file.json", json_encode($data));

            // Redirect to the profile page and get the user's information to display it
            header("location:profile.php?id=". $users['id']."&name=$users[name]"."&email=$users[email]"."&gender=$users[gender]"."&phone=$users[phone]");
        }else{
            foreach ($errors as $error) {
                echo $error;
            }
        }
    }else{
        echo "Get method not supported, manipulating the request method not allowed!" . "<br>";
    }

?>