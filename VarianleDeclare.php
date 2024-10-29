<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php



echo "<h3> Global Key word </h3>";
$x1 = 20;
$y1 = 30;

function myTest2(){
    global $x1, $y1;
    $y1 = $x1 + $y1;
}
myTest2();
echo $y1;

$x3 = 78;
$y3 = 89;

function myTest3(){
    $GLOBALS['y3'] = $GLOBALS['x3'] + $GLOBALS['$y3'];
}
myTest3();
echo $y3;

echo '<h3> Local Scope </h3>';
function myTest1() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  echo "<p>Variable x inside function is: $x</p>";
  myTest1();

//  echo "<h3>Global scope</h3>";
// $x = 90;
// function myTest(){
//     echo "<p>Variable x inside dunction is: $x </p>";

// }
// myTest();
// echo "<p>Variable x inside functionnnn is $x </P>";



?>
</body>
</html>