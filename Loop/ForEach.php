<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach PHP</title>
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
    <?Php
    $colors = array('red', 'green', 'blue', 'yellow');

    foreach($colors as $col){
        echo ('The list of colors are '. $col . "<br>");
    }
    echo "<br>";
    echo "<br>";
    $members = array('Peter' => '90', "Ben" => '60', 'Aisha' => '89', "Shafiya" => '78');
    foreach ($members as $key => $value) {
        echo ('The list of key and value ' .$key . ':' .$value .'<br>');
    }
    echo "<br>";
    echo "<br>";
    $colors1 = array("red", "green", "blue", "yellow");

foreach ($colors1 as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors1);


$colors2 = array("red", "green", "blue", "yellow");

foreach ($colors2 as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors2);

echo "<br>";
echo "<br>";
    ?>

</body>
</html>