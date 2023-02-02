<!doctype html>
<html lang="en">

<head>
    <!-- this file should named store_results.php -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Your quiz results </title>
</head>

<body>
    <?php
    include('store_navbar.php');
    include('database_inc.php');
    $row_counter = 0;
    // this is where you need to define your POST variables.
    // you  use the same names as the form fields in your HTML
    $size = $_POST['size'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Welcome to your results to find your perfect PUT THING HERE.</h2>
            </div>
        </div>
        <?php
        // below we query a table. The % sign is a wildcard character, which matches any character
        // so we are saying, find any items where the breed is the same as the breed the user selected
        // and the exercise is the same as the exercise the user selected
        // make sure you are looking in the right table, and that the column names match the names of the form fields
        // for example, if you are looking at dog breeds, and table is named dogs, and the breed column is named breed
        // then you would use $search_query = "SELECT * FROM dogs WHERE breed LIKE '$breed' AND exercise LIKE '$exercise';";
    
        $sql = "SELECT * FROM items WHERE category IN ('" . implode("','", $category) . "') OR price > '$price' OR size LIKE '$size';";
        // echo $sql;
        // use the line above to be sure that the SQL statement is correct
        $search_query = mysqli_query($connect, $sql);
        
        
        ?>


        <?php
        if (mysqli_num_rows($search_query) == 0) {
        ?>

            <div class="alert alert-info mt-5 mb-5" role="alert">
                We are sorry! We can't find any items with that search term. Please
                <a href="index.php" class="alert-link">click here</a>. to return to our home page.
            </div>

        <?php

        } else {
            $number_of_results = mysqli_num_rows($search_query);
        ?>
            <table class="table table-hover">
                <caption>We found <?php echo $number_of_results; ?> results from your search.</caption>
                <thead>
                    <tr>
                        <!-- these table headers are the column names, you probably want to change them. -->
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Buy now!</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($row = mysqli_fetch_array($search_query)) {
                    ?>
                        <tr>
                            <!-- these are the column names from the database, you probably want to change them. -->
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><img height="50" width="50" src="<?php echo $row['image']; ?>"></td>
                            <td><a href="store_add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mt-2">Add to cart</a></td>

                        </tr>
                <?php
                    }
                }
                ?>
            </table>






    </div> <!-- closing container div -->
    <?php
    echo "<pre>";
    print_r(get_defined_vars());
    echo "</pre>";

    include('store_footer.php');
    ?>
    <!-- please don't touch anything below this line -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
