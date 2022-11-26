<?php

session_start();
$errors=[];
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
    //get data
    $username=trim(htmlspecialchars($_POST['username']));
    $email=trim(htmlspecialchars($_POST['email']));
    $password=trim(htmlspecialchars($_POST['password']));
    //validation
    include "../validation/validation.php";
    //username
    if(empty($username)){
        $errors[]="Please type a username";
    }elseif(!minLen($username,3)){
        $errors[]="Username must be greater than 20 characters";
    }elseif(!maxLen($username,20)){
        $errors[]="Username must be less than 20 characters";
    }
    //password
    if(empty($password)){
        $errors[]="Password input is required";
    }elseif(!minLen($password,6)){
        $errors[]="Password must be greater than 6 characters";
    }elseif(!maxLen($password,20)){
        $errors[]="Password must be less than 20 characters";
    }
    //email
    if(empty($email)){
        $errors[]="Email input is required";
    }elseif(checkEmail($email)){
        $errors[]="This email not valid";
    }

    if(empty($errors)){
        $id=rand(1,1000);
        $users=[
            "id"=>$id,
            "username"=>$username,
            "email"=>$email,
            "password"=>sha1($password)
        ];
        //unset($_SESSION['users']);
        if($_SESSION['users']==null){
            $_SESSION['users']=[$users];
        }else{
            array_push($_SESSION['users'],$users);
        }
        $userData=file_get_contents(" ../users.json");
        $userDatade=json_decode($userData,true);
        $userDatade[]=$users;
        file_put_contents("../users.json",json_encode($userDatade,true));
        $_SESSION['id']=$id;
        header("location: ../login.php");
        die;
    }else{
        $_SESSION['errors']=$errors;
        header("Location:../register.php");
    }

}