<?php 

function findThursday($days){
    switch ($days) {
        case 1: 
        $result = "Monday";
        break;

        case 2:
            $result = "Tuesday";
            break;

        case 3:
            $result = "Wednesday";
            break;

        case 4:
            $result = "Thursday";
            break;

        case 5:
            $result = "Friday";
            break;

        case 6:
            $result = "Saturday";
            break;

        case 7:
            $result = "Sunday";
            break;

            default:
            $result = "Invalid days";

    }

    return $result;
}

$days = 4;

$result = findThursday($days);
echo "finds days  : $result\n"


?>