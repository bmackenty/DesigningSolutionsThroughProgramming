<!doctype html>
<!-- This file should be named: store_view_cart.php -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>My cart</title>
</head>

<body>
    <?php
    session_start();
    include('store_navbar.php');
    include('database_inc.php');
    ?>
    <div class="container mt-5">

        <?php
        // check if user is logged in
        if (isset($_SESSION['logged_in_id'])) {
            $logged_in_id = $_SESSION['logged_in_id'];
        ?>

            <h1>Here are the items in your cart</h1>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>

                        <th scope="col">Item</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Image</th>

                    </tr>
                </thead>
                <?php
                $query_view_cart = mysqli_query($connect, "SELECT * FROM cart WHERE user_id = '$logged_in_id';");
                while ($result = mysqli_fetch_array($query_view_cart)) {
                    $current_item = $result['item_id'];
                    $query_item_information = mysqli_query($connect, "SELECT * FROM items WHERE id = '$current_item';");
                    while ($result_item = mysqli_fetch_array($query_item_information)) {
                    ?>
                        <tr>
                            <td><?php echo $result_item['name']; ?></td>
                            <td><?php echo $result_item['price']; ?></td>
                            <td><img src="<?php echo $result_item['image']; ?>"></td>
                        </tr>

                    <?php
                    }
                }
                ?>
                </tbody>
            </table>
        <?php

        } else {
        ?>
            <div class="alert alert-warning" role="alert">
                You must be logged in to see your cart! :-(<a href="store_login.php" class="alert-link">log in</a> or <a href="store_register.php" class="alert-link">register</a> to continue.
            </div>
        <?php
        }
        ?>
    </div> <!-- closing container div -->
    <?php
    include('store_footer.php');

    // echo "<pre>";
    // print_r(get_defined_vars());
    // echo "</pre>";
    ?>
    <!-- please don't touch anything below this line -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
