<?php
$fruits=["Apple"=>120,"Banana"=>40,"Mango"=>100];
echo"Sorted by value";
echo"<br>"; 
asort($fruits);
foreach($fruits as $fruit=>$price){
    echo"$fruit=>$price";
}
echo"<br>";
echo"Sorted by keys<br>";
ksort($fruits);
foreach($fruits as $fruit=>$price){
    echo"$fruit=>$price";
}
?>

