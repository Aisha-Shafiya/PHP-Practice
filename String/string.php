<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body style="background-color: black; color:whitesmoke; justify-content: center">
    <?php
      $x = 'Aisha shafiya';
      echo $x ."<br>";
 
      echo strlen( $x."<br>");
      echo("<br>");
      echo str_word_count($x ."<br>");
     echo("<br>");
      $position = strpos("Aisha Shafiya","Shaf");
      echo("The position of shaf is " . $position);
      echo("<br>");

      // Upper case of string and lower cas of string
    $stringOne = "Hello world";
    $stringUpper = strtoupper($stringOne);
    echo("The uppercase value is " . $stringUpper . "<br>");
    $stringLower = strtolower($stringOne);
    echo("<br>");
    echo("The lowercase value is " . $stringLower ."<br>");


    // Replace the string
   $stringReplace = str_replace('world', 'Aisha', $stringOne);
   echo('The replace val is ' . $stringReplace . "<br>");

   $x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
?>
</body>
</html>