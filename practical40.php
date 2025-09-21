<!DOCTYPE html>
<html>
<head>
    <title>Name Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form action="" method="post">
        Name: <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>
    <?php
if (isset($_POST['username'])) {
    $name = $_POST['username'];
    echo "Welcome, " . htmlspecialchars($name) . "!";
} else {
    echo "Please enter your name first!";
}
?>
</body>
</html>