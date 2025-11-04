<?php

$numbers = [10, 20, 30];

array_push($numbers, 40); // it insert a data at the end , complexity O(1) - no elements shifted

print_r($numbers);

echo "<br>";

array_unshift($numbers, 5); // it insert a data at the beginning , complexity O(n) - elements shifted to right

print_r($numbers);

echo "<br>";

array_splice($numbers, 2, 0, 15); // it insert in a specific position, complexity O(n) - elements shifted to right

print_r($numbers);

/* array splice (variable, offset, length, replacement) - so there is no replacement because the length is still zero so nothing is remove it just add the 15 at index 2 */