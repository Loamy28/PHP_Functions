<?php
function detectLetterType($letter) {
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');

    if (in_array($letter, $vowels)) {
        return "vowel";
    } elseif (in_array($letter, $consonants)) {
        return "consonant";
    } else {
        return "invalid input";
    }
}
$letter = 'd';
$result = detectLetterType($letter);
echo "The letter '{$letter}' is a {$result}.";

?>