<?php

function DigitToWord($num) {
    $nums = array(
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
    );

    $numStr = strval($num);
    $digitsArray = str_split($numStr);
    $wordArray = array_map(function ($num) use ($nums) {
        return $nums[$num];
    }, $digitsArray);

    $wordRep = implode(' ', $wordArray);

    return $wordRep;
}

$number = 721;
$word = digitToWord($number);
echo $word; 

?>