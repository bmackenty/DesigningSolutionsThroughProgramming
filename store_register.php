<!doctype html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our store</title>
    </head>
    <body>

    <?php 
        include('store_navbar.php'); 
    ?>
        <div class="container">
  
  <div class="row">
    <div class="col-12 text-center">
      <h1>Thank you for registering</h1>
    </div>
  </div>

  <?php 
if ($_SESSION['error_duplicate_email']){
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong> There is already an email like that in our system. Please try again.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
unset($_SESSION['error_duplicate_email']);
?>




        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Thank you</strong> For registering. Please be patient while we activate your account. 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <form action="store_register_process.php" method="POST" class="mb-5">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter your email address">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Please enter your password. Make it a good password!">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
  
  

    </div> <!-- closing container div --> 
<?php 
    include('store_footer.php');
?>
<!-- please don't touch anything below this line --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
