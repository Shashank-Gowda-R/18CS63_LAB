<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Transpose</title>

    <script>
        // Dynamically generate the matrix input table based on user dimension input
        function generateMatrixInput() {
            var rows = document.getElementById('rows').value;
            var cols = document.getElementById('cols').value;
            var matrixContainer = document.getElementById('matrix-container');

            var matrixHTML = '';
            for (var i = 0; i < rows; i++) {
                matrixHTML += '<tr>';
                for (var j = 0; j < cols; j++) {
                    matrixHTML += '<td><input type="number" name="matrix[' + i + '][' + j + ']" required></td>';
                }
                matrixHTML += '</tr>';
            }

            matrixContainer.innerHTML = matrixHTML;
        }
    </script>
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

    <h1>Matrix Transpose</h1>
    <form action="transpose.php" method="post" >
        <label for="rows">Number of Rows:</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <br>
        <label for="cols">Number of Columns:</label>
        <input type="number" id="cols" name="cols" min="1" required>
        <br>
        <input type="button" value="Generate Matrix" onclick="generateMatrixInput()">
        <br><br>
        <table id="matrix-container">
            <!-- Matrix input table will be dynamically generated here -->
        </table>
        <br>
        <input type="submit" value="Find Transpose">
    </form>
</body>

</html>