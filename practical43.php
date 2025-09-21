 <!DOCTYPE html>
<html>
<head>
    <title>Favorite Programming Language</title>
</head>
<body>

    <h2>Which is your favorite programming language?</h1>
    <form method="post">
        <input type="radio" name="language" value="PHP"> PHP <br>
        <input type="radio" name="language" value="JavaScript"> JavaScript <br>
        <input type="radio" name="language" value="Python"> Python <br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['language'])) {
            $choice = $_POST['language'];  
            echo "<h3>You selected: $choice</h3>";
        } else {
            echo "<h3>Please select an option!</h3>";
        }
    }
    ?>
</body>
</html>