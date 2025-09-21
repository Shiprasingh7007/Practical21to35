<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

    <h2>Feedback Form</h2>

    <form action="" method="post">
        Name: <input type="text" name="name" ><br><br>
        Email: <input type="email" name="email" ><br><br>
        Message: <textarea name="message" ></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];   
    $email = $_POST['email']; 
    $message = $_POST['message']; 

    echo "Thank you, $name! Your feedback has been submitted.";
}
?>
</body>
</html>