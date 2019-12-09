<?php

if(isset($_POST["submit"])){
  session_start();


  $_SESSION["name"]= htmlentities($_POST["name"]);

  $_SESSION["email"]= htmlentities($_POST["email"]);


  header("Location:app2.php");




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  
<div class="container">
 

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="m-4">

  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" value="" >
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control"  name="email" value="">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
   
    <input type="submit" class="form-control" name="submit" value="submit" >
  </div>
   
</form>
</div>
</body>
</html>