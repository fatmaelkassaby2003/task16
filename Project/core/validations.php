<?php 

function required($value): bool
{
    if (empty($value)) {
        return true;
    } else {
        return false;
    }
}

function minLength($value, $length): bool 
{
    if (strlen($value) < $length) {
        return true;
    }
    return false; 
}
