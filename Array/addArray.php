<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Array</title>
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
    //  Bracket syntax
    $fruits = array('Apple', "Banana", 'Cherry');
    $fruits[] = 'Orange';

    var_dump($fruits);
    echo "<br>";
    echo "<br>";

    $cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

//Output the array:
var_dump($cars);

// Multiple items in array
echo "<br>";
echo "<br>";
$animals = array('Lion', 'Tiger', 'wild Boar', 'Elephant');
array_push($animals, 'Seal', 'Leapord');
var_dump($animals)
    ?>
</body>
</html>