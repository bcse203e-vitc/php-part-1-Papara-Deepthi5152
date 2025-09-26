<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = array();
foreach ($array1 as $key => $value) {
    array_unshift($value, $array2[$key]);
    $result[] = $value;
}

print_r($result);
?>

