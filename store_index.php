<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our store! </title>
    </head>
    <body>
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
    </div> <!-- closing container div --> 
<?php 
    include('store_footer.php');
?>
<!-- please don't touch anything below this line --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
