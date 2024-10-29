<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While PHP</title>
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
     $i = 1;

     while($i < 6){
        echo ('The num is :'. $i . "<br>");
        $i++;
     }
     echo "<br>";
     echo "<br>";

     $a = 1;

     while($a < 6){
        if($a === 3)
            break;
            echo ('The list of numbers '. $a . "<br>");
        $a++;
     }
     echo "<br>";
     echo "<br>";
     $b = 0;
     while($b < 6){
        $b++;
        if($b === 3) continue;
        echo ("The list of numbers ". $b . "<br>");
       
     }
    ?>
</body>
</html>