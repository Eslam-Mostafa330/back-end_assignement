<?php

function minLen($input,$len){
    if(strlen($input)<3){
        return false;
    }
    return true;
}

function maxLen($input,$len){
    if(strlen($input)>20){
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
