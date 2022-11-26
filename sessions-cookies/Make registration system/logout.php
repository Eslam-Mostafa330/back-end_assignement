<?php
    session_start();

    session_unset();

    setcookie("user_info", $new_name . $new_email, time()-60*60, "/");

    header("location: register.php");

?>