<!DOCTYPE html>
<html>

<head>
    <title>Matrix Multiplication</title>
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
    <h1>Matrix Multiplication</h1>
    <form action="multiply1.php" method="post">
        <label for="rows1">Number of Rows (Matrix 1):</label>
        <input type="number" id="rows1" name="rows1" min="1" required>
        <br>
        <label for="cols1">Number of Columns (Matrix 1):</label>
        <input type="number" id="cols1" name="cols1" min="1" required>
        <br>
        <label for="rows2">Number of Rows (Matrix 2):</label>
        <input type="number" id="rows2" name="rows2" min="1" required>
        <br>
        <label for="cols2">Number of Columns (Matrix 2):</label>
        <input type="number" id="cols2" name="cols2" min="1" required>
        <br>
        <h2>Enter Matrix 1 Values:</h2>
        <table id="matrix1Table">
            <!-- Matrix 1 values will be inserted dynamically using JavaScript -->
        </table>
        <br>
        <h2>Enter Matrix 2 Values:</h2>
        <table id="matrix2Table">
            <!-- Matrix 2 values will be inserted dynamically using JavaScript -->
        </table>
        <br>
        <input type="submit" value="Multiply">
    </form>

    <script>
        function createMatrixInputTable(rows, cols, tableId) {
            var matrixTable = document.getElementById(tableId);
            matrixTable.innerHTML = ""; // Clear previous table contents

            for (var i = 0; i < rows; i++) {
                var row = matrixTable.insertRow();
                for (var j = 0; j < cols; j++) {
                    var cell = row.insertCell();
                    cell.innerHTML = '<input type="number" name="' + tableId + '[' + i + '][' + j + ']" required>';
                }
            }
        }

        document.getElementById("rows1").addEventListener("input", function() {
            var rows1 = parseInt(this.value);
            var cols1 = parseInt(document.getElementById("cols1").value);
            createMatrixInputTable(rows1, cols1, "matrix1");
        });

        document.getElementById("cols1").addEventListener("input", function() {
            var rows1 = parseInt(document.getElementById("rows1").value);
            var cols1 = parseInt(this.value);
            createMatrixInputTable(rows1, cols1, "matrix1");
        });

        document.getElementById("rows2").addEventListener("input", function() {
            var rows2 = parseInt(this.value);
            var cols2 = parseInt(document.getElementById("cols2").value);
            createMatrixInputTable(rows2, cols2, "matrix2");
        });

        document.getElementById("cols2").addEventListener("input", function() {
            var rows2 = parseInt(document.getElementById("rows2").value);
            var cols2 = parseInt(this.value);
            createMatrixInputTable(rows2, cols2, "matrix2");
        });
    </script>
</body>

</html>