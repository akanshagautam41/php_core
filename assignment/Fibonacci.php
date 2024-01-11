<?php 
// Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
// o 34

function fib($x){
    $num = 0;
    $num1 = 1;

    $z = 0;
    while($z < $x){
echo ' , '.$num;
$num2 = $num1 + $num;
$num = $num1;
$num1 = $num2;
$z = $z + 1;


    }
}

$x = 10;
fib($x);
?>