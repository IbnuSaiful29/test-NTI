<?php

function sumEvenIntegers($numbers) {
    $sum = 0;

    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            $sum += $num;
        }
    }

    return $sum;
}

// Contoh penggunaan
$numbers = [15, 18, 3, 9, 6, 2, 12];
$result = sumEvenIntegers($numbers);

print_r($result);
