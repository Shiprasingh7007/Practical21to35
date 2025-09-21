<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST" action="">
   Username: <input type="text" name="username" ><br><br>
   Email :  <input type="email" name="email" ><br><br>
   Password:  <input type="password" name="password" ><br><br>
    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];  

    echo "<h3>Registration Successful!</h3>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
}
?>

</body>
</html>