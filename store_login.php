<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Please login</title>
    </head>
    <body>

    <?php 
        session_start();
        include('store_navbar.php'); 
    ?>
<div class="container mt-5">
  
  <div class="row">
    <div class="col-12 text-center">
      <h2>Welcome to our online store!</h2>
      <h3>Please login below</h3>
    </div>
  </div>



<?php 
if ($_SESSION['error_wrong_password']){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Wrong password</strong> Please check your typing and try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
unset($_SESSION['error_wrong_password']);
?>

<?php 
if ($_SESSION['error_authentication']){
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong> You cannot access that page without being an authenticated user.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
unset($_SESSION['error_authentication']);
?>



<?php 
if ($_SESSION['error_no_email']){
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>No email!</strong> We do not have an email like that in our system
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
unset($_SESSION['error_no_email']);
?>

    <form class="mb-5" action="store_login_process.php" method="POST">
        <div class="form-group">
            <label for="email_address">Email address</label>
            <input name="email" type="email" class="form-control" id="email_address" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="user_password">Password</label>
            <input name="password" type="password" class="form-control" id="user_password">
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
