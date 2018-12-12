<!doctype html>
<html lang="en">
    <!-- Documentation: http://getbootstrap.com/docs/4.1/getting-started/introduction/ -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <!-- keep your content within body opening and closing tags -->
  <body>
      
<?php 
include('header.php');
?>

<div class="container m-3"> <!-- open container -->

<?php 
session_start();

$logged_in = $_SESSION['logged_in'];
if ($logged_in == False) {
?>  

<form action="login_process.php" method="post">

  <div class="form-group">

<?php 
  if ($_SESSION['wrong_password']) {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Problem:</strong> Wrong password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>

<?php 


    unset($_SESSION['wrong_password']);
  } elseif ($_SESSION['error_no_email']) {
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Problem:</strong> No user with that email.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>

<?php 
    unset($_SESSION['error_no_email']);
  }
?>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
} else { 
  $email = $_SESSION['email'];
  echo "You are already logged in as $email! ";
  ?>
  <a href="logout.php">Click here to logout</a>
  <?php
}
?>

</div>  <!-- close container -->




    <!-- Please don't touch anything below this line -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

<?php
include('footer.php');
?>

</html>
