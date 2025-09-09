<html>
    <head>
        <title>Form</title>
</head>
<body>
    <form method="get">
   Name<input type="text" name="name"><br><br>  
   <input type="submit">
</form>
<?php
   $name=$_GET["name"];
   echo" hello, $name";
   ?>
   </body>
   </html>
