<?php

function getStringLengths($strings) {
    $lengths = array_map('strlen', $strings);
    return $lengths;
}

$strings = ["Nutella", "Mars", "Snickers", "Kinder", "Cadbury"];
$result = getStringLengths($strings);

print_r($result); 