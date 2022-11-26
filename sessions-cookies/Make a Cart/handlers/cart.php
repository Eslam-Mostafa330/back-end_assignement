<?php
include '../validation/validation.php';
session_start();

$errors=[];
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    //get data
    $username=trim(htmlspecialchars($_POST['username']));
    $email=trim(htmlspecialchars($_POST['email']));
    $phone=trim(htmlspecialchars($_POST['phone']));
    $address=trim(htmlspecialchars($_POST['address']));
    $quantity=trim(htmlspecialchars($_POST['quantity']));
    $product=$_POST['product'];
    $price = $_POST['price'];
    
    ## validation ##
    // //username
    if(empty($username)){
        $errors[]="Please type a username";
    }elseif(!minLen($username,3)){
        $errors[]="Username must be greater than 20 characters";
    }elseif(!maxLen($username,20)){
        $errors[]="Username must be less than 20 characters";
    }

    // //email
    if(empty($email)){
        $errors[]="Email input is required";
    }elseif(checkEmail($email)){
    }

    // //phone
    if(empty($phone)){
        $errors[]="Please type your phone number";
    }elseif(checkNumber($phone)){
        $errors[]="Please type a valid number";
    }elseif(!maxLen($phone,14)){
        $errors[]="Phone should not be greater than 14 numbers";
    }

    //address
    if(empty($address)){
        $errors[]="Please insert your address";
    }elseif(!minLen($address,15)){
        $errors[]="Address should be greater than 15 characters";
    }elseif(!maxLen($address,50)){
        $errors[]="Address should not exceeds 50 characters";
    }

    // quantity
    if(empty($quantity)){
        $errors[]="At least one quantity should be entered";
    }elseif (checkNumber($quantity)) {
        $errors[]="This field can only contain numbers";
    }elseif($quantity <=0 && filter_var($quantity, FILTER_VALIDATE_INT)) {
        $errors[]="This field can only contain numbers from 1 and greater";
    }

    if (empty($errors)) {
        $id = rand(1, 1000);
        $users=[
            "id"=>$id,
            "username"=>$username,
            "email"=>$email,
            "phone"=>$phone,
            "address"=>$address,
            "product"=>$product,
            "quantity"=>$quantity,
            "price"=>$price
        ];
        if ($_SESSION['users'] == null) {
            $_SESSION['users'] = $users;
        }else{
            array_push($_SESSION['users'], $users);
        }
        $user_data = file_get_contents("../data.json");
        $user_data_decode = json_decode($user_data, true);
        $user_data_decode[] = $users;
        file_put_contents("../data.json", json_encode($user_data_decode, true));
        header("location: ../checkout.php");
        $_SESSION['id'] = $id;
        // echo $id;
        // var_dump($user_data_decode);
        
        // print_r($_SESSION['users']);
    }else{
        $_SESSION['errors']=$errors;
        header("location: ../cart.php");
    }

}
