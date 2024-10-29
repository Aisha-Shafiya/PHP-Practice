<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Numbers</title>
</head>
<body>
    <?php
    // Number PHP

    $a = 9;
    $b = 5.36;
    $c = "78";

    var_dump($c);

    $x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

echo "<br>";
// Casr float into int

$x = 23465.768;
$intCast = (int)$x;
echo $intCast;
echo "<br>";

echo "<br>";
$string = "Aisha";
$intString = (int)$string;
echo $intString;
echo "<br>";
echo var_dump($intString)
    ?>
</body>
</html>