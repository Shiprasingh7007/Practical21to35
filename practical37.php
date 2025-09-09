<html>
    <head>
        <title>Form</title>
</head>
<body>
 <form action="" method="get">
    name: <input type="text" name="name" > <br><br>
 age:<input type= "number" name="age"><br><br>
 <input type="submit">
</form>
<?php
$name=$_GET["name"];
 $age=$_GET["age"];
 echo"Hello $name,you are $age years old";
 ?>
 </body>
 <html>