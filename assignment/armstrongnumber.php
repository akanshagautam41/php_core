<?php
function Armstrong($num) {
    $Number = $num;
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit ** 3;
        $num = (int)($num / 10);
    }

    return $sum === $Number;
}


$armstrongNumber = 371;

if (Armstrong($armstrongNumber)) {
    echo "$armstrongNumber is an Armstrong number.\n";
} else {
    echo "$armstrongNumber is not an Armstrong number.\n";
}

echo "<br>Print the specified format:\n";
for ($i = 5; $i <= 8; $i++) {
    for ($j = 9; $j >= 5; $j--) {
        echo "$i$j ";
    }
    echo "\n";
}



?>