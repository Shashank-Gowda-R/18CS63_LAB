<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style1.css">
    <title>Simple Calculator</title>
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
        }

        .gap {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="box">
        <form method="POST" autocomplete="off">
            <h2>Simple Calculator</h2>
            <div class="inputbox">
                <input type="number" name="num1" required>
                <span>enter number1</span>
                <i></i>
            </div>
            <div class="inputbox input3">
                <span class="span">Select Opertor:</span>
                <select name="operation">
                    <option></option>
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="%">Division</option>
                </select>
            </div>
            <div class="inputbox">
                <input type="number" name="num2" required>
                <span>Enter Number2</span>
                <i></i>
            </div>
            <input type="submit" value="Calculate">
            <div class="gap">

            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                echo "The sum of " . $num1 . " and " . $num2 . " is " . $result;
                break;
            case '-':
                $result = $num1 - $num2;
                echo "The difference between " . $num1 . " and " . $num2 . " is " . $result;
                break;
            case '*':
                $result = $num1 * $num2;
                echo "The multiplication of " . $num1 . " and " . $num2 . " is " . $result;
                break;
            case '/':
                $result = $num1 / $num2;
                echo "The division of " . $num1 . " from " . $num2 . " gives " . $result;
                break;
            case '%':
                $result = $num1 % $num2;
                echo "The remainder when " . $num1 . " is divided from " . $num2 . " is " . $result;
                break;
            default:
                echo "Invalid operation selected";
        }
    }
    ?>
</body>

</html>