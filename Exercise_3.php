<?php

function div3($n)
{
    $digits = str_split($n);
    $total = 0;

    foreach ($digits as $digit) {
        $total += $digit;
    }

    if ($total == 3 || ($total % 3 == 0)) {
        return true;
    } else {
        return false;
    }
}

$num = 6;

if (div3($num)) {
    echo $num, " is divisible by three.";
} else {
    echo $num, " is not divisible by three.";

}

?>