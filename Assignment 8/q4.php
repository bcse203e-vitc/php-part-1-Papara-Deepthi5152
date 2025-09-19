<?php
$x = array(1, 2, 3, 4, 5);
echo "array(" . count($x) . ") { ";
foreach ($x as $key => $value) {
    echo "[" . $key . "]" . "=> int(" . $value . ") ";
}
echo "}<br>";
unset($x[4]);
$x = array_values($x);
echo "array(" . count($x) . ") { ";
foreach ($x as $key => $value) {
    echo "[" . $key . "]" . "=> int(" . $value . ") ";
}
echo "}<br>";
?>

