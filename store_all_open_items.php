<!doctype html>
<!-- This file should be named: store_all_open_orders.php -->
<!-- this file is meant to be used by a manager or admin -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>All open orders</title>
</head>

<body>
    <?php
    session_start();
    include('store_navbar.php');
    include('database_inc.php');
    ?>
    <div class="container mt-5">



            <h1>Here are the items in all carts, all users</h1>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>

                        <th scope="col">Item</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Remove</th>

                    </tr>
                </thead>
                <?php
                $query_view_cart = mysqli_query($connect, "SELECT * FROM cart ORDER BY user_id;");
                while ($result = mysqli_fetch_array($query_view_cart)) {
                    $order_id = $result['id'];
                    $current_item = $result['item_id'];
                    $query_item_information = mysqli_query($connect, "SELECT * FROM items WHERE id = '$current_item';");
                    while ($result_item = mysqli_fetch_array($query_item_information)) {
                    ?>
                        <tr>
                            <td><?php echo $result_item['name']; ?></td>
                            <td><?php echo $result_item['price']; ?></td>
                            <td><a href="store_admin_remove_from_cart.php?order_id=<?php echo $order_id; ?>">Remove</a></td>
                        </tr>

                    <?php
                    }
                }
                ?>
                </tbody>
            </table>

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
