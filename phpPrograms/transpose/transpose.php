<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 2px solid rgb(11, 247, 180);
            width: 20%;
            height: 30px;
            text-align: center;
            border-collapse: collapse;
            background-color: rgb(182, 250, 227);
            color: rgb(9, 126, 172);
            font-size: 20px;
        }

        .table {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the matrix dimension from the form
        $rows = (int)$_POST['rows'];
        $cols = (int)$_POST['cols'];

        // Retrieve the matrix values from the form
        $matrix = [];
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $matrix[$i][$j] = (int)$_POST['matrix'][$i][$j];
            }
        }

        // Function to find the transpose of a matrix
        function transposeMatrix($matrix, $rows, $cols)
        {
            $transposedMatrix = [];

            // Create a new matrix with swapped rows and columns
            for ($i = 0; $i < $cols; $i++) {
                for ($j = 0; $j < $rows; $j++) {
                    $transposedMatrix[$i][$j] = $matrix[$j][$i];
                }
            }

            return $transposedMatrix;
        }

        // Find the transpose of the matrix
        $transposedMatrix = transposeMatrix($matrix, $rows, $cols);

        // Display the original matrix
        echo "<h2>Original Matrix</h2>";
        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                echo "<td>" . $matrix[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Display the transposed matrix
        echo "<h2>Transposed Matrix</h2>";
        echo "<table>";
        for ($i = 0; $i < $cols; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $rows; $j++) {
                echo "<td>" . $transposedMatrix[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>