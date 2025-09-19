<?php
$color = array('white', 'green', 'red');
echo implode(', ', $color) . ",<br>";
sort($color);
echo "<ul>";
foreach ($color as $c) {
  echo "<li>$c</li>";
}
echo "</ul>";
?>

