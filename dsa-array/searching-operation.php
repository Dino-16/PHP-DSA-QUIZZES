<?php

$numbers = [10, 20 , 30, 40, 50];
$target = 30;


for($i = 0; $i < count($numbers); $i++) {
    if($numbers[$i] == $target) {
        echo "target found at index $i, the target is $numbers[$i]";
    }
}

echo "<br>";

$numbers = [15, 12, 13, 51, 55];
$target = 12;

foreach($numbers as $index => $number) {
    if($number == $target) {
        echo "Target found at index: $index, the target is $number";
    }
}