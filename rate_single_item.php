<?php 
// this file should be named rate_single_item.php

include('database_inc.php');

// we are getting the ID from the URL. Normally we would sanitize this to make 
// this safe
$id = $_GET['id'];


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