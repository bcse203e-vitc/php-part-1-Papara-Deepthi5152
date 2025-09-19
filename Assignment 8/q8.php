<?php
$ages = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
function print_sorted_array($header, $arr) {
    echo "<b>$header</b><br>";
    foreach ($arr as $name => $age) {
        echo "$name : $age<br>";
    }
    echo "<br>";
}
asort($ages);
print_sorted_array("a) Ascending order sort by value:", $ages);
ksort($ages);
print_sorted_array("b) Ascending order sort by key:", $ages);
arsort($ages);
print_sorted_array("c) Descending order sorting by value:", $ages);
krsort($ages);
print_sorted_array("d) Descending order sorting by key:", $ages);
?>

