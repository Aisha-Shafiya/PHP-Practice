<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post PHP</title>
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
        input [type='text']{
            padding: 20px;
            font-size: 20px;
        }
    </style>
    
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname" placeholder="First Name">
  <input type="submit">
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo "The submitted name is $name";
    }
  }
  ?>
</form>
</body>
</html>