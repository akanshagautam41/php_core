
<?php
// Write program to remove duplicate values from array

$num = [1, 2, 3, 4, 2, 5, 6, 3, 7, 8, 9, 1];
$num2 = array_values(array_unique($num));
echo " num : ";
print_r($num); 
echo "<br> num2 : ";
print_r($num2);
?>


