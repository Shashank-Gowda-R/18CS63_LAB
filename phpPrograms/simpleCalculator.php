<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
        }
        .gap{
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="POST">
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="%">/</option>
        </select>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="submit" value="Calculate">
        <div class="gap" >

        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                echo "The sum of ".$num1 ." and ". $num2 ." is ".$result;
                break;
            case '-':
                $result = $num1 - $num2;
                echo "The difference between ".$num1 ." and ". $num2 ." is ".$result;
                break;
            case '*':
                $result = $num1 * $num2;
                echo "The multiplication of ".$num1 ." and ". $num2 ." is ".$result;
                break;
            case '/':
                $result = $num1 / $num2;
                echo "The division of ".$num1 ." from ". $num2 ." gives ".$result;
                break;
            case '%':
                $result = $num1 % $num2;
                echo "The remainder when ".$num1 ." is divided from ". $num2 ." is ".$result;
                break;
            default:
                echo "Invalid operation selected";
        }
    }
    ?>
</body>

</html>