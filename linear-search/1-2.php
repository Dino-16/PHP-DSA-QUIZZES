<?php 

$numbers = [5, 15, 25, 35, 45];
$target = 100;

function linearSearch($numbers, $target) {
    for($i = 0; $i < count($numbers); $i++) {
        if($numbers[$i] == $target) {
            return $i;
        }
    }

    return -1;
}

$result = linearSearch($numbers, $target);

echo ($result != -1) ? "Found at index $result" : "Not Found!"; 