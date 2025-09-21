<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>

<h2>Online Quiz</h2>

<form method="POST" action="">
    <p>1. PHP stands for?</p>
    <input type="radio" name="Q1" value="A"> Personal Home Page <br>
    <input type="radio" name="Q1" value="B"> Private Home Page <br>
    <input type="radio" name="Q1" value="C"> Professional Hyperlink Page <br><br>

    <p>2. Which symbol is used for variables in PHP?</p>
    <input type="radio" name="Q2" value="A"> @ <br>
    <input type="radio" name="Q2" value="B"> $ <br>
    <input type="radio" name="Q2" value="C"> # <br><br>

    <p>3. Who is the father of PHP?</p>
    <input type="radio" name="Q3" value="A"> Rasmus Lerdorf <br>
    <input type="radio" name="Q3" value="B"> Willam Makepiece <br>
    <input type="radio" name="Q3" value="C"> Drek Kolkevi <br><br>

    <input type="submit" name="submit" value="Submit Quiz">
</form>

<?php
if (isset($_POST['submit'])) {
    $score = 0;
    if ($_POST['Q1'] == "A") { $score++; }
    if ($_POST['Q2'] == "B") { $score++; }
    if ($_POST['Q3'] == "A") { $score++; }

    echo "<h3>Your Score: $score / 3</h3>";
}
?>

</body>
</html>