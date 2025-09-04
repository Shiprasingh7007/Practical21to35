<?php
$arr = array(40,10,30,20,50);
echo"Original Array";
echo"<br>";
print_r($arr);
// Ascending order
sort($arr);
echo"<br>Ascending: ";
print_r($arr);
//Descending order
rsort($arr);
echo"<br>Descending: ";
print_r($arr);
?>
