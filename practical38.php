<!Doctype html>
<html>
    <head>
         <title>Sum of two numbers</title>
</head>
<body>
    <form action="" method="get">
    Enter first number:<input type="number" name="num1" required><br><br>
    Enter second number:<input type="number" name="num2"required><br><br>
    <input type="submit" value="Calculate Sum">
</form>
</body>
</htmy>
<?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$sum=$num1+$num2;
ech"$sum";
  
