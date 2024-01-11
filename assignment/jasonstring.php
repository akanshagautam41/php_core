<?php
// Write a PHP script which decodes the following JSON string.
$a = '{"name":"akansha","age":30,"city":"vadodara"}';
$array = json_decode($a, true);
if ($array === null && json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error : ' . json_last_error_msg();
} else {
    
    echo "Decodes json file :\n";
    print_r($array);
}
?>