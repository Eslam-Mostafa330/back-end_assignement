<?php

session_start();

class validation {

    // A function that displays all errors
    public function errors(array $errors=[]):object
    {
        $this->errors = $errors;
        return $this;
    }

    // A function to take inputs from the user
    public function takeInput(string $name, string $email):object
    {   
        $this->name = $name;
        $this->email = $email;
        return $this;
    }

    // A function to verify that the input is not empty
    public function required():object
    {
        
        if(isset($_POST['submit'])) {
            if(!empty($this->name)) {
                $_SESSION['name'] = $this->name;
            }else{
                $this->errors[] = "Name field can not be empty"; 
                $_SESSION['errors'] = $this->errors;
                header("location: form.php");
                die;
            }
        }
        return $this;
    }

    // A function that Validates the minimum name length
    public function min(int $min_input):object
    {
        if(strlen($this->name) > $min_input) {
            $_SESSION['name'] = $this->name;
        }else{
            $this->errors[] = "The name field must contain at least two characters";
            $_SESSION['errors'] = $this->errors;
            header("location: form.php");
            die;
        }
        return $this;
    }

    // A function that Validates the maximum name length
    public function max(int $max_input):object
    {
        if(strlen($this->name) < $max_input) {
            $_SESSION['name'] = $this->name;
        }else{
            $this->errors[] = "Name field cannot exceed ten characters";
            $_SESSION['errors'] = $this->errors;
            header("location: form.php");
            die;
        }
        return $this;
    }

    // Email validation function
    public function validateEmail():object
    {
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email'] = $this->email;
            header("location: info.php");
        }else{
            $this->errors[] = "Email field must be valid and not empty";
            $_SESSION['errors'] = $this->errors;
            header("location: form.php");
        }
        return $this;
    }

}

$validate = new validation;
$validate->takeInput($_POST['name'], $_POST['email'])->required()->min(2)->max(10)->validateEmail($_POST['email']);
$validate->errors();


?>
