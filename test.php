<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: red;
            font-size: 90px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* body {
            background-color: black;
        } */
    </style>
</head>

<body>
    <?php
    // date_default_timezone_set('Asia/Kolkata');
    $currentTime = date("H:i:s A");
    echo "<p>$currentTime</p>" ;
    ?>
</body>

</html>