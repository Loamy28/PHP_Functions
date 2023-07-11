<?php
function DelRepeatEle($sortedList) {
    $result = [];
    $prevElement = null;

    foreach ($sortedList as $element) {
        if ($element !== $prevElement) {
            $result[] = $element;
        }
        $prevElement = $element;
    }

    return $result;
}

$sortedList = ["apple", "apple", "banana", "banana", "banana", "cherry", "cherry", "cherry", "cherry"];
$uniqueList = DelRepeatEle($sortedList);
print_r($uniqueList);

?>
