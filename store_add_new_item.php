<!doctype html>
<!-- this file should be named store_add_new_item.php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->
<div class="container mt-5">


<form action ="store_add_new_item_process.php" method="POST">

  <div class="form-group">
    <label for="description">Description</label>
    <input name="description" type="text" class="form-control" id="description"  placeholder="Enter description">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input name="price" type="text" class="form-control" id="price"  placeholder="Enter price">
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input name="quantity" type="text" class="form-control" id="quantity"  placeholder="Enter quantity">
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input name="category" type="text" class="form-control" id="category"  placeholder="Enter category">
  </div>

  <div class="form-group">
    <label for="size">Size</label>
    <input name="size" type="text" class="form-control" id="size"  placeholder="Enter size">
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input name="image" type="text" class="form-control" id="image"  placeholder="Enter image">
  </div>


  <button type="submit" class="btn btn-primary">Add a new item</button>
</form>







</div> <!-- close the container -->
    
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
