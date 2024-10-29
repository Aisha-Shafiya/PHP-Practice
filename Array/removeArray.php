<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Array</title>
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
   $cars = array("Volvo", "BMW", "Toyota");
   array_splice($cars, 1, 1);
   var_dump($cars);

   echo "<br>";
   echo "<br>";

   $carsOne = array("Volvo", "BMW", "Toyota");
   unset($carsOne[1]);
   var_dump($carsOne);
    ?>
</body>
</html>