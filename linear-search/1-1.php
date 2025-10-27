<?php

$numbers = [10, 20, 30, 40, 50];
$target = 30;

function linearSearch($numbers, $target) {
    for($i = 0; $i < count($numbers); $i++) {
        if($numbers[$i] == $target) {
            return $i;
        }
    }

    return -1;
}

$result = linearSearch($numbers, $target);

echo "found at index $result";