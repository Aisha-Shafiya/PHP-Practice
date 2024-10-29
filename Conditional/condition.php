<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition PHP</title>
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
    // If condition
    $t = 14;

    if($t < 90){
        echo "Have a nice day";
    }
  echo "<br>";
  echo "<br>";
    $p = 14;

if ($p == 14) {
  echo "Have a good day!";
}
echo "<br>";
echo "<br>";

// Logical Operators
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
echo "<br>";
echo "<br>";

$time = date("H");
if($time < '20'){
   echo "Have a good day!!!";
}
else {
    echo "Have a good night!!!";
}

// Shorthand if
echo "<br>";
echo "<br>";

$h = 78;
$d = 'Aisha Shafiya';
if($h < 100) $g = "Hello " . $d;
echo $g;
echo "<br>";
echo "<br>";

// Nested if

$one = 13;
if($one > 10){
    echo "Above 10";
    if($one > 20){
        echo " and also above 20";
    }
    else {
        echo " but not above 20";
    }
}
    ?>
</body>
</html>