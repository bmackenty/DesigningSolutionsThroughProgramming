<!doctype html>
<html lang="en">
  <!-- this file should be named forum_view.php -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our forum</title>
    </head>
    <body>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->

<?php 
session_start();
include('store_navbar.php');

// The line below opens a connection to our database and authenticates this script to access the database. 
include('database_inc.php');
?>
<!-- the line below opens a container where all our content will "live inside" --> 
<div class="container mt-3">

<?php
// We need to know what forum we are working with. We do this by GET-ting the forum id in the URL bar. 
$forum_id = $_GET['forum_id'];

// We have to be careful though, because someone could accidently change the variables in the 
// address bar. So we sanitize it, ensuring it is only an integer and nothing else. 
$forum_id = filter_var($forum_id, FILTER_SANITIZE_NUMBER_INT);

// we need to track which forum we are working with across different pages in our forum.
// this session variable is set here: 
$_SESSION['forum_id'] = $forum_id;


// Here we SELECT the forum from our database table named "forum". 
$query_get_forum_data = mysqli_query($connect,"SELECT * FROM forum WHERE id = '$forum_id';");

// If we can't find that forum in our table (if the results return zero rows of data), 
// we should let the user know.
if (mysqli_num_rows($query_get_forum_data) == 0){
  ?>
    <div class="alert alert-warning" role="alert">
      I can't find that forum <a href="forum_index.php" class="alert-link">Click here to return</a> to the forum index. 
    </div>

  <?php
  // the line below stops our PHP script immediately. If there is no forum ID, we don't want 
  // our script to continue.
  die;

} else {

// however, if there is a forum, we want to get some data from the forum
while($row_get_forum_data = mysqli_fetch_array($query_get_forum_data)){

// below we are fetching the name and description of the forum from our database and
// assigning them to local variables. 
$forum_name = $row_get_forum_data['forum_name'];
$forum_description = $row_get_forum_data['forum_description'];
}
?>

<!-- the line below is the header block that shows the name of the forum -->
<div class="alert alert-primary mt-3 mb-2" role="alert">
 <p>Welcome to <a href="forum_index.php"><?php echo $forum_name; ?></a></p>
 <small><?php echo $forum_description; ?></small>
</div>

<!-- the lines below are only for developers and should be erased after you understand them -->
<div class="alert alert-light" role="alert">
  <p>
  This page is shows the topics and threads for one forum. We get the forum ID from the URL (look above). On this page we allow 
  anyone to post a new topic. You might want to only allow logged in users to do this. 
  </p>
</div>

<?php
// below we want to get all the threads which have a parent_id of the forum_id. 
$query_get_topics = mysqli_query($connect, "SELECT * FROM threads WHERE parent_id = '$forum_id';");

// if there are no  topics for this forum_id, we tell the user. 
if(mysqli_num_rows($query_get_topics) == 0){
?>
    <div class="alert alert-warning" role="alert">
      <!-- thank you to Maxim for contributing this code to our project -->
      There are no topics associated with this forum. 
      <!-- we don't want to allow anyone to post a new topic if they are not logged in. -->
        <?php if(isset($_SESSION['logged_id'])){ ?>
            <a style="cursor: pointer;" data-toggle="modal" data-target="#post_new_topic"><strong> Be the first to post a new topic</strong></a>
        <?php } else { ?>
            <a href="login.php"><strong> Login to post a new topic</strong></a>
        <?php } ?>
    </div>

<?php 
} else {
// show all topics and threads. The "main view" of our forum: 
?>
<div class="row">
  <div class="col-12 text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#post_new_topic">
      Post a new topic in <?php echo $forum_name; ?>
    </button>
  </div>
</div>


<?php 
// the lines below we process the results from the query on line 83. 
while($row_get_topics = mysqli_fetch_array($query_get_topics)){
  $current_topic = $row_get_topics['id'];
  ?>
<div class="row m-2">

  <div class="col-12">
    <a target="_new" href="forum_thread_view.php?topic_id=<?php echo $row_get_topics['id']; ?>">
    <?php echo $row_get_topics['thread_subject']; ?></a>
    <br />
    <small> Topic was posted: <?php echo $row_get_topics['thread_date']; ?> Author: <?php echo $row_get_topics['thread_owner_id']; ?></small>
  </div>

</div>

<?php 
// so as we are looping through each topic, we are going to check if there is a THREAD with the parent_id 
// of the current TOPIC. 
$query_get_threads_of_topic = mysqli_query($connect, "SELECT * FROM threads WHERE parent_id = '$current_topic';");
if(mysqli_num_rows($query_get_threads_of_topic == 0)) {
  echo "no sub topics";
} else { 
  while($row_get_threads_of_topic = mysqli_fetch_array($query_get_threads_of_topic)){
?>
    <div class="row m-2">

    <div class="col-11 offset-1">
     <?php echo $row_get_threads_of_topic['thread_subject']; ?>
      <br />
      <small> Topic was posted: <?php echo $row_get_topics['thread_date']; ?> Author: <?php echo $row_get_topics['thread_owner_id']; ?></small>
    </div>
  </div>

<?php 
        }
      } 
    }
  }
}
?>

<!-- This forum uses modals, which are kind of fun. read the bootstrap documentation
https://getbootstrap.com/docs/4.0/components/modal/ to learn more.  -->
<div class="modal fade" id="post_new_topic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="post_new_topic_label">Post a new topic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="forum_new_thread_process.php" method="POST">
    <div class="form-group">
        <label for="topic_subject">Topic Subject</label>
        <input type="text" name="thread_subject" class="form-control" id="thread_subject" placeholder="Please type your new topic here">
    </div>
    <div class="form-group">
        <label for="thread_body">Topic</label>
        <textarea name="thread_body" class="form-control" id="thread_body" rows="5" placeholder="Please type your topic here"></textarea>
    </div>
    <input type="hidden" name="parent_id" value="<?php echo $forum_id; ?>">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create new topic</button>

        </form>
      </div>
    </div>
  </div>
</div> <!-- End post new topic modal --> 


</div> <!-- close the container -->
    <footer class="footer mt-4 py-3 bg-secondary text-white text-center">
      <div class="container">
        <span >Thank you for visiting our site. :-) </span>
      </div>
    </footer>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <?php
    // This code displays every defined variable and error message.
    // It's quite helpful when you are debugging.

      // echo "<pre>";
      // print_r(get_defined_vars());
      // echo "</pre>";
    ?>
  
  </body>
</html>
