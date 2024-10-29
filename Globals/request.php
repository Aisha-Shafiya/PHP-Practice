<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request PHP</title>
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
        input[type = 'submit']{
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
            background-color: #78904A;
            color: whitesmoke;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Name : <input type="text" name="fname">
        <input type="submit">
    </form>
    <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
    <?php
   if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
   }
echo "<br>";
echo "<br>";

?>
</body>
</html>