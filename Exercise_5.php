<?php

function Armstrong($number) {
    $CharToString = (string) $number;
    $length = strlen($CharToString);
    $sum = 0;

    for ($i = 0; $i < $length; $i++) {
        $digit = (int) $CharToString[$i];
        $sum += pow($digit, $length);
    }

    if ($sum === $number) {
        echo "$number is an Armstrong number";
    } else {
        echo "$number is not an Armstrong number";
    }
}

Armstrong(133344);
?>