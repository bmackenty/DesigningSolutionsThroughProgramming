<!doctype html>
<!-- This file should be named: store_item_single.php -->
<!-- this file shows a single item based on the id of the item -->
<!-- right now, the items table is referenced (line 30) but you might want to change it --> 


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Single item</title>
    </head>
    <body>
<?php 
include('store_navbar.php'); 
include('database_inc.php');
$id = $_GET['id'];
?>
<div class="container mt-5">
  
  <div class="row">
    <div class="col-12 text-center">
      <h2>Welcome to our online store!</h2>
    </div>
  </div>

<?php 

$query_get_item = mysqli_query($connect, "SELECT * FROM items WHERE id = '$id';");
while($result_get_item = mysqli_fetch_array($query_get_item)){
    ?>

<p>Item name: <?php echo $result_get_item['description']; ?></p>

<p>Price: <?php echo $result_get_item['price']; ?></p>

    <?php
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
