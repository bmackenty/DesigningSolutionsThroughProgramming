<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
<body>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->
    <?php 
        session_start();
        include('store_navbar.php'); 
    ?>
<div class="container mt-5">
  
  <div class="row">
    <div class="col-12 text-center">
      <h2>Welcome to our online store!</h2>
    </div>
  </div>



<?php 
if ($_SESSION['error_wrong_password']){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error</strong> Wrong Password. Please try again.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
unset($_SESSION['error_wrong_password']);
?>


<?php 
if ($_SESSION['error_no_email']){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error</strong> There is no email like that in our system.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div> <!-- close the container -->
    <footer class="footer mt-auto mt-4 py-3 bg-secondary text-white text-center">
      <div class="container">
        <span>Thank you for logging in. </span>
      </div>
    </footer>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
