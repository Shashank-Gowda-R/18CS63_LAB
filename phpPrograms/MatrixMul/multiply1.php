<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the matrix dimensions from the form
    $rows1 = (int)$_POST['rows1'];
    $cols1 = (int)$_POST['cols1'];
    $rows2 = (int)$_POST['rows2'];
    $cols2 = (int)$_POST['cols2'];

    // Validate matrix dimensions for multiplication
    if ($cols1 !== $rows2) {
        echo "Matrix dimensions are not possible for multiplication.";
    } else {
        // Retrieve the matrices values from the form
        $matrix1 = [];
        $matrix2 = [];
        for ($i = 0; $i < $rows1; $i++) {
            for ($j = 0; $j < $cols1; $j++) {
                $matrix1[$i][$j] = (int)$_POST['matrix1'][$i][$j];
            }
        }
        for ($i = 0; $i < $rows2; $i++) {
            for ($j = 0; $j < $cols2; $j++) {
                $matrix2[$i][$j] = (int)$_POST['matrix2'][$i][$j];
            }
        }

        // Perform matrix multiplication
        $resultMatrix = [];
        for ($i = 0; $i < $rows1; $i++) {
            for ($j = 0; $j < $cols2; $j++) {
                $resultMatrix[$i][$j] = 0;
                for ($k = 0; $k < $cols1; $k++) {
                    $resultMatrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }

        // Display the matrices and result in a table
        echo "<h2>Matrix 1</h2>";
        echo "<table>";
        for ($i = 0; $i < $rows1; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols1; $j++) {
                echo "<td>" . $matrix1[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<h2>Matrix 2</h2>";
        echo "<table>";
        for ($i = 0; $i < $rows2; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols2; $j++) {
                echo "<td>" . $matrix2[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<h2>Result Matrix</h2>";
        echo "<table>";
        for ($i = 0; $i < $rows1; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols2; $j++) {
                echo "<td>" . $resultMatrix[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
