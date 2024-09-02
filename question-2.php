<?php

function palindrome($str) {
    $reversedStr = strrev($str);

    if ($str === $reversedStr) {
        return strlen($str);
    } else {
        return false;
    }
}

print_r(palindrome("aadaa"));
print_r(palindrome("daba"));
