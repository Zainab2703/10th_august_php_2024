<?php
$json = '{"name": "Zainab", "age": 21, "city": "Ahmedabad"}';
$array = json_decode($json, true);
print_r($array);
?>
