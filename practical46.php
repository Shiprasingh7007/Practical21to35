<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <h2>Contact Form</h2>
  <form action="" method="post">
   Name: <input type="text" name="name" ><br><br>
   Subject: <input type="text" name="subject" ><br><br>
    Message: <input type="message" name="message"><br><br>
    <button type="submit">Send</button>
  </form>
  <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = ($_POST['name']);
    $subject = ($_POST['subject']);
    $message =($_POST['message']);
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We will contact you soon!</p>";
} else {

}
?>
</body>
</html>