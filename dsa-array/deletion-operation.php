<?php

$numbers = [10, 20, 30, 40, 50, 60, 70];

array_pop($numbers); // delete data at the end, complexity O(1) - Direct Removal

print_r($numbers);

echo "<br>";

array_shift($numbers); // delete at the beginning, complexity O(n) - Shifting Occurs

print_r($numbers);

echo "<br>";

unset($numbers[2]); // delete specific numbers, complexity O(n) - Shifting Occurs

print_r($numbers);