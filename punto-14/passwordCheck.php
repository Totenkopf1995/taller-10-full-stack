<?php
function hasSecurityLong($pass)
{
    return strlen($pass) >= 8;
}

function hasUpperLetter($pass)
{
    $arreglo = str_split($pass, 1);
    foreach ($arreglo as $value) {
        if (ctype_upper($value)) {
            return true;
        }
    }
    return false;
}

function hasNumber($pass)
{
    $arreglo = str_split($pass, 1);
    foreach ($arreglo as $value) {
        if (ctype_digit($value)) {
            return true;
        }
    }
    return false;
}
