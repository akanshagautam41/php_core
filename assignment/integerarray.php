<?php
// Use a for loop to total the contents of an integer array called numbers which
// has five elements. Store the result in an integer called total.

$numbers = [5, 56, 10, 45, 20];
$total = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

echo "Total Sum: $total";
?>