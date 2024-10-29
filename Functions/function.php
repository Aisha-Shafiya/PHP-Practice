<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions PHP</title>
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
    function myMessage(){
        echo "Hello world";
    }
    myMessage();

    echo "<br>";
    echo "<br>";

    function familyName($fname){
        echo ("$fname Refness. <br>");
    }

    familyName("Aisha");
    familyName('Shafiya');
    familyName("Adam");

    echo "<br>";
    echo "<br>";

    function familyName1($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
      familyName1("Hege","1975");
      familyName1("Stale","1978");
      familyName1("Kai Jim","1983");


      echo "<br>";
      echo "<br>";

      function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
      }
      
      setHeight(350);
      setHeight();
      setHeight(135);
      setHeight(80);

      echo "<br>";
      echo "<br>";

      function sum($x, $y){
        $z = $x + $y;
        return $z;

      }

      echo "5 + 10 = " . sum(5,10);
      echo "<br>";
      echo "<br>";

      function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo "The sum is " .$num;

      echo "<br>";
      echo "<br>";

    // Variadic Function

    function sumMyNumbers(...$x){
        $n = 0;
        $len = count($x);

        for($i = 0; $i < $len; $i++){
            $n += $x[$i];

        }
        return $n;
    }

    $a = sumMyNumbers(5,2,6,2,4,5);
    echo ('The sum of the numbers are ' . $a);

    echo "<br>";
    echo "<br>";

    function myFamily($lastname, ...$firstname){
        $text = "";
        $len = count($firstname);

        for($i = 0; $i < $len; $i++){
            $text = $text . "Hi, $firstname[$i] $lastname. <br>";

        }
        return $text;
    }

    $a = myFamily("Doe","Jane","John","Joey");
    echo ( $a);
    ?>
</body>
</html>