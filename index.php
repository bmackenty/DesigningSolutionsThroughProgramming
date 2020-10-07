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
<?php 
include('store_navbar.php'); 
include('database_inc.php');
$row_counter = 0;
?>
<div class="container mt-5">
  
  <div class="row">
    <div class="col-12 text-center">
      <h2>Welcome to our online store!</h2>
    </div>
  </div>

  <!-- begin search bar-->
    <div class="row">
        <div class="col-12">
            <form action="store_search_results.php" method="POST" class="form-inline">
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

  <div class="row mt-4">
<?php
$query_all_items = mysqli_query($connect, "SELECT * FROM items;");
while ($row = mysqli_fetch_array($query_all_items))
{
?>
  <!-- Start row 1 -->
  <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <p class="card-text"><?php echo $row['price']; ?></p>
                    <img width="200" height="200" src="<?php echo $row['image']; ?>">
                    <a href="store_add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mt-2">Add to cart</a>
                </div>
            </div>
        </div>

    <?php 
        $row_counter = $row_counter +1; 
        if ($row_counter == 3) {
            echo "</div>";
            echo "<div class=\"row mt-3\">";
            $row_counter = 0;
        }
    }
    ?>        
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
