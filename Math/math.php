<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: black;
            color: whitesmoke;
            font-size: 25px;
            font-weight: 700;
            text-align: center;
           justify-content: center;
           margin-top: 120px;
           font-family: 'Courier New', Courier, monospace;
        }
    </style>
    <title>Math PHP</title>
</head>
<body>
    <?php
    echo(pi());
    echo "<br>";
    echo "<br>";

    $minmumValue = min(0, 150, 30, 20, -8, -200);
    echo("The minmum value is ". $minmumValue);
    echo "<br>";
    echo "<br>";
    $maximumValue = min(0, 150, 30, 20, -8, -200);
    echo("The maximum value is ". $maximumValue);
    echo "<br>";
    echo "<br>";
    $abs = abs(-9.8);
    echo("The abs value is ".$abs)
    ?>
</body>
</html>