<!DOCTYPE html>
<html>
<head>
    <title>Marks Result</title>
</head>
<body>
    <h2>Enter Your Marks</h2>
    <form action="" method="get">
        Enter Marks: <input type="number" name="marks" required><br><br>
        <input type="submit" value="Check Result"><br><br>
    </form>
<?php
if (isset($_GET['marks'])) {
    $marks = $_GET['marks'];

    if ($marks >= 40) {
        echo "PASS ";
    } else {
        echo "FAIL ";
    }
} else {
    echo "Please enter your marks first!";
}
?>
</body>
</html>