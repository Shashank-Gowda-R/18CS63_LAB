<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Transpose</title>
    <link rel="stylesheet" href="../style1.css">
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

        .find {
            width: fit-content !important;
            height: max-content !important;
            border-radius: 10px !important;
        }

        .find1 {
            padding: 10px;
            width: fit-content !important;
            margin-top: 15px;
            cursor: pointer;
            background-color: aqua;
            font-weight: 900;
            border-radius: 10px;
        }
    </style>
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
</head>

<body>
    <div class="box">
        <form action="transpose.php" method="post">
            <h2>Matrix Transpose</h2>
            <div class="inputbox">
                <input type="number" id="rows" name="rows" min="1" required>
                <span>Number of Rows:</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="number" id="cols" name="cols" min="1" required>
                <span>Number of Columns:</span>
                <i></i>
            </div>
            <input type="button" class="find1" value="Generate Matrix" onclick="generateMatrixInput()">
            <br><br>
            <table id="matrix-container">
                <!-- Matrix input table will be dynamically generated here -->
            </table>
            <br>
            <input type="submit" class="find" value="Transpose">
        </form>
    </div>
</body>

</html>