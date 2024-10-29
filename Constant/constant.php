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
    <title>Conatant</title>
</head>
<body>
    <?php
    define("GREETING", 'Welcome to my PHP Course');
    echo GREETING;
    echo "<br>"; 
    echo "<br>";

    const MYCAR = 'Volvo';
    echo("My car is ". MYCAR);
    echo "<br>"; 
    echo "<br>";
// Constant Array
define('cars',['Alfa Romeo','BMW','Toyota']);
// for($i = 0; $i < cars.length; $i++){
//     echo('The list of car is ' . cars); 
// }
echo('The list of car is ' . cars[0]);
echo "<br>"; 
echo "<br>";

define("JOLLY", "Always Smile");

function myTest() {
  echo JOLLY;
}

myTest();
    ?>
</body>
</html>