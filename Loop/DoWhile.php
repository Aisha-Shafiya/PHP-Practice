<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While PHP</title>
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
</head>
<body>
    <?php
    $a = 1;
    do {
        echo ("The list of value is ". $a . "<br>");
        $a++;

    }while($a < 6);
    echo "<br>";
    echo "<br>";

    $i = 8;

do {
  echo ("The list of value is ". $i . "<br>");
  $i++;
} while ($i < 6);
    ?>
    <p>As you can see, the code is executed once, even if the condition is never true.</p>
</body>
</html>