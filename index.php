<?php

function checkLenght($psw){
    return strlen($psw) >= 8;
}

function checkNumber($psw) {
    for ($i = 0; $i < strlen($psw); $i++) {
        if (is_numeric($psw[$i])) {
            return true;
        }
    }
    return false;
}

function checkUppercase($psw) {
    for ($i = 0; $i < strlen($psw); $i++) {
        if (ctype_upper($psw[$i])) {
            return true;
        }
    }
    return false;
}

function checkSpecial($psw) {
    $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '|', '\\', ':', ';', '"', "'", '<', '>', ',', '.', '?', '/'];

    for ($i = 0; $i < strlen($psw); $i++) {
        if (in_array($psw[$i], $specialChars)) {
            return true;
        }
    }
    return false;
}

?>
