<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate Array</title>
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
    $cars = array('brand' => 'Ford', 'model' => 'Mustang', 'year'=> 1960);
    var_dump($cars);

    echo "<br>";
    echo "<br>";
    // Access AArray
    echo "The value is " . $cars['model'];

    // Change value
    echo "<br>";
    echo "<br>";

    $cars['year'] = 2024;
    echo "The Change of year is " . $cars['year'];

    // Loop through array
    echo "<br>";
    echo "<br>";
    foreach($cars as $x => $y){
        echo "The car  $x is : $y <br>";
    }

    // Associate array function
    echo "<br>";
    echo "<br>";
    function myFunction(){
        echo "I come from a function!!!";
    }

    $myArray = array('pet' => 'Barfi', 'animal' => 'Cat', 'breed' => 'Persian', 'nature' => 'Loving', 'message' => myFunction() );
    $myArray['message'];

    // To change all items
    echo "<br>";
    echo "<br>";
    $animals = array('Lion', 'Tiger', 'Panther', 'Leopard');
    foreach($animals as $wild){
        echo "Wild animal $wild <br>";
    }

    echo "<br>";
    echo "<br>";
    foreach($animals as &$wilds){
        $wilds = 'Deer';
        
    }
   
    unset($wilds);
    var_dump($animals);
        // echo "The animal is $wilds <br>";
    
    ?>
</body>
</html>