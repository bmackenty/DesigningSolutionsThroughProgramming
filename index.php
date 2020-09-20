<!doctype html>
<!-- this file should be named index.php -->
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
    </ul>
    </div>
  </nav> <!-- this ends our navigation bar-->
<div class="container mt-5">
  
  <div class="row">
    <div class="col-12 text-center">
      <h2>Welcome to our online store!</h2>
    </div>
  </div>

  <!-- begin search bar-->
  <div class="row">
    <div class="col-12">
      <form action="search_results.php" method="POST" class="form-inline">
        <div class="input-group" style="width:100%;">
          <input type="search" name="search" class="form-control" placeholder="Enter your search term">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- end search bar -->

        
  <!-- Start row 1 -->
  <div class="row mt-3">
    <div class="col-4">

      <div class="card">
        <div class="card-header">
          This is something we sell!
        </div>
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">Product description that will make people buy this</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          This is something we sell!
        </div>
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">Product description that will make people buy this</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          This is something we sell!
        </div>
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">Product description that will make people buy this</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end row 1 -->
  <!-- start row 2 -->
  <div class="row mt-3 mb-4">
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          This is something we sell!
        </div>
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">Product description that will make people buy this</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          This is something we sell!
        </div>
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">Product description that will make people buy this</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          This is something we sell!
        </div>
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">Product description that will make people buy this</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end row 2 -->
        





    </div> <!-- close the container -->
    <footer class="footer mt-auto mt-4 py-3 bg-secondary text-white text-center">
      <div class="container">
        <span >Thank you for visiting our site. :-) </span>
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
