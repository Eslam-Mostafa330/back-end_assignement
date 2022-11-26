<?php

session_start();

function minLen($input,$len){
    if(strlen($input) < $len){
        return false;
    }
    return true;
}

function maxLen($input,$len){
    if(strlen($input) > $len){
        return false;
    }
    return true;
}

function checkEmail($input){
    if(filter_var($input,FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function checkNumber($input) {
    if (is_numeric($input)) {
        return false;
    }
    return true;
}
