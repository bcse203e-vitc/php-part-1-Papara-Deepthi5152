<?php
$original_array = array(1, 2, 3, 4, 5);
$new_item = '$';
$position = 3;
echo "Original array:<br>";
foreach ($original_array as $element) {
    echo $element . " ";
}
echo "<br>";
array_splice($original_array, $position, 0, $new_item);
echo "After inserting '$' the array is:<br>";
foreach ($original_array as $element) {
    echo $element . " ";
}
?>

