  <!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    
    <form method="post" action="">
        Enter First Number: <input type="number" name="num1" ><br><br>
        Enter Second Number: <input type="number" name="num2" ><br><br>
     
        <select name="operation">
            <option value="+">Addition </option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication </option>
            <option value="/">Division </option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>

<?php


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "+":
            $result = $num1 + $num2;
            echo $result;
            break;
        case "-": 
            $result = $num1 - $num2;
             echo $result;
            break;
        case "*":
            $result = $num1 * $num2;
             echo $result;
            break;
        case "/":
            $result=$num1/$num2;
             echo $result;


            break;
         
    }

?>
</body>
</html>



