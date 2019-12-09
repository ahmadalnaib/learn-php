<?php 

session_start();

$name=$_SESSION['name'];
$email=$_SESSION['email'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h5>Thans you with us <?php echo $name; ?> YOU HAVE SCBSCRIBED WITH THE EMAIL <?php echo $email ?></h5>
  <a href="app3.php">Go page3</a>
</body>
</html>