<?php 
// this file should be named rate_single_item.php

// In this code snippet, a query is executed to retrieve the rating of an item from the "items" 
// table where the id of the item is equal to the variable $id. The result of the query is stored
// in the variable $query_get_rating. Then, the while loop is used to iterate through the rows of the 
// result set returned by the query.

include('database_inc.php');

// we are getting the ID from the URL.
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


$query_show_single_item = mysqli_query($connect, 
"SELECT * FROM items WHERE id = '$id';");

while($row_show_single_item = mysqli_fetch_array($query_show_single_item)){
    ?>
    <p>
    <strong>Name:</strong> <?php echo $row_show_single_item['name']; ?>
    </p>

    <p>
    <strong>Description:</strong> <?php echo $row_show_single_item['description']; ?>
    </p>
<?php
}


$query_get_rating = mysqli_query($connect, "SELECT rating from items WHERE id = '$id';");
while($row_get_rating = mysqli_fetch_array($query_get_rating)){
    $rating = $row_get_rating['rating'];
}

?>
<p>Rating: <?php echo $rating; ?></p>

<p><a href="rate_single_item_process.php?id=<?php echo $id; ?>&action=up">+1 (rate up)</a></p>
<p><a href="rate_single_item_process.php?id=<?php echo $id; ?>&action=down">-1 (rate down)</a></p>
