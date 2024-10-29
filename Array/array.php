<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
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
      function myFunction(){
        echo "The text comes from a function";
      }

      $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());
       $myArr[3];

       echo "<br>";
       echo "<br>";

       $cars = array("Volvo", "BMW", "Toyoto");
       echo "The total count is " . count($cars);

       echo "<br>";
       echo "<br>";

       $bird = array('Peacock', 'Crow', 'Hen', 'Bulbul');
       var_dump($bird);
       echo "<br>";
       echo "<br>";

       echo "The value of index 0 is ". $bird[0];

    //Change the values
    echo "<br>";
    echo "<br>";

    $animal = array('Cat', "Dog", "Lion", "Monkey", "Donkey");
 for($i = 0; $i < count($animal); $i++){
    echo "The list of animals are " . $animal[$i]. "<br>";
 }

 echo "<br>";
 echo "<br>";

 $animal[1] = 'Tiger';
 for($i = 0; $i < count($animal); $i++){
    echo "The list of animals are " . $animal[$i]. "<br>";
 }


//  Loop
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}


// Push the val
echo "<br>";
echo "<br>";

$pet = array("Barfi", "Circuit","Bleuy","Aishu");
foreach($pet as $p){
    echo "The list of pet I have " . $p . "<br>";
}
echo "<br>";
echo "<br>";

array_push($pet, "Indigo");
foreach($pet as $q){
    echo "The list of pet I have " . $q . "<br>";
}
echo "<br>";
echo "<br>";

//Associate Arrays
$Asso = array('brand' => 'Ford', 'model' => 'Mustang', 'year' => 1964);
var_dump($Asso)
    ?>
</body>
</html>