<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For PHP</title>
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
   for($x = 0; $x <= 10; $x++){
    echo ("The num is : $x <br>");
   }
   echo"<br>";
   echo"<br>";

   for ($a = 0; $a <= 10; $a++) {
    if ($a == 3) break;
    echo "The number is: $a <br>";
  }
  echo"<br>";
   echo"<br>";
  for ($b = 0; $b <= 10; $b++) {
    if ($b == 3) continue;
    echo "The number is: $b <br>";
  }
    ?>
</body>
</html>