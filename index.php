<?php

// msg vars
$msg="";
$msgClass="";

// check for submit
if(filter_has_var(INPUT_POST,"submit")){


  //get the form data
  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message"];

  if(!empty($name) && !empty($email) && !empty($message)) {
    // passed
    if(filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

    $msg="we know that not Email ! 😒";
    $msgClass="alert-danger";

    }else {
    $msg="Welocme with us 😁 $name";
    $msgClass="alert-info";

    }
    

  } else {
    // failed
    $msg="Please fill im all fields";
    $msgClass="alert-danger";


  }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Contact us</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="img/flossen_05 (1).svg" width="30" height="30" class="d-inline-block align-top" alt="">
    PHP
  </a>
</nav>

<div class="container">
 <?php  if($msg !=''): ?>
      
  <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?></div>

 <?php endif; ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="m-4">

  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" value="">
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control"  name="email" value="">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group ">
  <label>Message</label>
    <textarea  class="form-control" name="message" value="" ></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  
</body>
</html>