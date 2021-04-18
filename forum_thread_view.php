<!doctype html>
<!-- this file should be named forum_thread_view.php -->
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
session_start();
$forum_id = $_SESSION['forum_id'];
include('store_navbar.php');
?>
<div class="container mt-3">

<?php
include('database_inc.php');
$topic_id = $_GET['topic_id'];
$topic_id = filter_var($topic_id, FILTER_SANITIZE_NUMBER_INT);

// We are going to select the thread: 
$query_get_topic_data = mysqli_query($connect,"SELECT * FROM threads WHERE id = '$topic_id';");
if (mysqli_num_rows($query_get_topic_data) == 0){
  ?>
    <div class="alert alert-warning" role="alert">
      I can't find that topic! <a href="forum_index.php" class="alert-link">Click here to return</a> to the forum index. 
    </div>
  <?php
  // if we can't find the thread id, we want to redirect the user to the forum index, we could add an error message here, to be more helpful. 
  header('Location:forum_index.php');

} else {

// We are going to select the forum name and description below: 

$query_get_forum_data = mysqli_query($connect, "SELECT * FROM forum WHERE id = '$forum_id';");
while($row_get_forum_data = mysqli_fetch_array($query_get_forum_data)){

$forum_name = $row_get_forum_data['forum_name'];
$forum_description = $row_get_forum_data['forum_description'];
}
?>

<div class="alert alert-primary mt-3 mb-2" role="alert">
 <p>Welcome to forum <a href="forum_index.php"><?php echo $forum_name; ?></a></p>
 <small><?php echo $forum_description; ?></small>
</div>

<!-- students, you can erase the block below -->
    <div class="alert alert-light" role="alert">
    <p>
    This page is shows the threads for one topic. We get the topic ID from the URL (look above). On this page we allow 
    anyone to post a new thread or reply. You might want to only allow logged in users to do this. 
    </p>
    </div>
<!-- students, you can erase the block above -->

<?php

$query_get_topics = mysqli_query($connect, "SELECT * FROM threads WHERE parent_id = '$topic_id';");
if(mysqli_num_rows($query_get_topics) == 0){
?>
    <div class="alert alert-warning" role="alert">
      There are no threads associated with this topic. <strong>Be the first to post a new reply</strong> below!
    </div>

    <?php 
// we need to get the parent topic so users can see what they are replying to
  $query_get_parent_topic = mysqli_query($connect, "SELECT * FROM threads WHERE id = '$topic_id';");
  while ($row_get_parent_topic = mysqli_fetch_array($query_get_parent_topic)){
    $parent_topic_subject = $row_get_parent_topic['thread_subject'];
    $parent_topic_body = $row_get_parent_topic['thread_body'];
  }
?>
<div class="alert alert-info">
  <p>Parent Topic:<p>

  <strong><?php echo $parent_topic_subject; ?></strong>
  <br /><br />
  <?php echo $parent_topic_body; ?>
</div>


    <form class="mb-2" action="forum_new_thread_process.php" method="POST">
    <div class="form-group">
        <label for="thread_subject">Thread Subject</label>
        <input type="text" name="thread_subject" class="form-control" id="thread_subject" placeholder="Please type your new thread reply here">
    </div>
    <div class="form-group">
        <label for="thread_body">Thread</label>
        <textarea name="thread_body" class="form-control" id="thread_body" rows="5" placeholder="Please type your thread here"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Reply to this thread</button>
    <input type="hidden" name="parent_id" value="<?php echo $topic_id; ?>">
    <input type="hidden" name="from_thread" value="True">
</form>

<?php 
} else {
  
?>

<?php 
// we need to get the parent topic so users can see what they are replying to
  $query_get_parent_topic = mysqli_query($connect, "SELECT * FROM threads WHERE id = '$topic_id';");
  while ($row_get_parent_topic = mysqli_fetch_array($query_get_parent_topic)){
    $parent_topic_subject = $row_get_parent_topic['thread_subject'];
    $parent_topic_body = $row_get_parent_topic['thread_body'];
  }
?>
<div class="alert alert-info">
  <p>Parent Topic:<p>

  <strong><?php echo $parent_topic_subject; ?></strong>
  <br /><br />
  <?php echo $parent_topic_body; ?>
</div>

<?php


while($row_get_topics = mysqli_fetch_array($query_get_topics)){
  ?>

<div class="card mb-2">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row_get_topics['thread_subject']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <small>
        reply was posted: <?php echo $row_get_topics['thread_date']; ?> Author: <?php echo $row_get_topics['thread_owner_id']; ?>
      </small>
    </h6>
    <p class="card-text"><?php echo $row_get_topics['thread_body']; ?></p>

  </div>
</div>

<?php } ?>

<div class="alert alert-primary mt-3 mb-2" role="alert">
    Post a new reply: <?php echo $forum_name; ?>
  </div>  


<form class="mb-2" action="forum_new_thread_process.php" method="POST">
    <div class="form-group">
        <label for="thread_subject">Thread Subject</label>
        <input type="text" name="thread_subject" class="form-control" id="thread_subject" placeholder="Please type your new thread reply here">
    </div>
    <div class="form-group">
        <label for="thread_body">Thread</label>
        <textarea name="thread_body" class="form-control" id="thread" rows="5" placeholder="Please type your thread here"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Reply to this thread</button>
    <input type="hidden" name="parent_id" value="<?php echo $topic_id; ?>">
    <input type="hidden" name="from_thread" value="True">
</form>

<?php 
}
}
?>

</div> <!-- close the container -->
    <footer class="footer mt-4 py-3 bg-secondary text-white text-center">
      <div class="container">
        <span >Thank you for visiting our site.</span>
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
  
    <?php
    // This code displays every defined variable and error message.
    // It's quite helpful when you are debugging. 

    //   echo "<pre>";
    //   print_r(get_defined_vars());
    //   echo "</pre>";
    ?>
  
  </body>
</html>
