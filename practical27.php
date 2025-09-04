<?php
$num=array(1,2,3,4,5);
echo"Original array";
print_r($num);
echo"<br>";
sort($num);
echo"Ascending order";
print_r($num);
echo"<br>";
rsort($num);
echo"Descending order";
print_r($num);
?>