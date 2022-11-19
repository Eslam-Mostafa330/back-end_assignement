<?php

    // A function that sanitizes user inputs
    function sanitizeInput($input)
    {
        return trim(htmlspecialchars(htmlentities($input)));
    }

    // A function that checks if the input is empty or not
    function inputRequired($input)
    {
        if (empty($input)) {
            return false;
        }
        return true;
    }

    // A function that checks and validates the accepted minimum value
    function minVal($input, $length)
    {
        if (strlen($input) < $length) {
            return false;
        }
        return true;
    }

    // A function that checks and validates the accepted maximum value
    function maxVal($input, $length)
    {
        if (strlen($input) > $length) {
            return false;
        }
        return true;
    }

    // Function to validate whether the input received is an email
    function emailVal($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    // Function to prevent manipulating the gender values
    function gender($value, $array)
    {
        if (in_array($value, $array)) {
            return false;
        }
        return true;
    }


?>