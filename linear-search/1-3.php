<?php

$numbers = [];
$target = 10;

function linearSearch($numbers, $target) {
    for($i = 0; $i < count($numbers); $i++) {
        if($numbers[$i] == $target) {
            return $i;
        }
    }

    return -1;
}

$result = linearSearch($numbers, $target);

if($result != -1) {
    echo "found at index $result";
} else {
    echo "not found";
}