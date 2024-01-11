<?php
// Write a PHP program to find the largest of three numbers using ternary
// Operator.
function LargestNumber($number1,$number2,$number3){
    $largest = $number1;
    $largest = ($number1 > $number2) ? (($number1 > $number3) ? $number1 : $number3) : (($number2 > $number3) ? $number2 : $number3);
    
    echo "The largest number among  is: $largest \n";
}

LargestNumber(25,45,50);
?>