<?php
$numbers = [10, 9, 36, 32, 50];

sort($numbers); // ascending , O(n log n) - Efficient hybrid sorting 
print_r($numbers);

echo "<br>";

rsort($numbers); // descending, O(n log n) - Efficient hybrid sorting 
print_r($numbers);

// php uses hybrid quicksort