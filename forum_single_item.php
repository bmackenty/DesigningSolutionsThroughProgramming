<?php
// We need to know what item we are working with. We do this by GET-ting the id in the URL bar. 
$id = $_GET['id'];

// We have to be careful though, because someone could accidently change the variables in the 
// address bar. So we sanitize it, ensuring it is only an integer and nothing else. 
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);



// below we want to get all the threads which have a parent_id of the id of our item.. 
$query_get_topics = mysqli_query($connect, "SELECT * FROM threads WHERE parent_id = '$id';");

// if there are no  topics for this id, we tell the user. 
if(mysqli_num_rows($query_get_topics) == 0){
?>
    <div class="alert alert-warning" role="alert">
      <!-- thank you to Maxim for contributing this code to our project -->
      There are no topics associated with this item 
      <a style="cursor: pointer;" data-toggle="modal" data-target="#post_new_topic"><strong> Be the first to post a new topic</strong></a>
    </div>

<?php 
} else {
// show all topics and threads: 
?>
<div class="row">
  <div class="col-12 text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#post_new_topic">
      Post a new topic about this item.
    </button>
  </div>
</div>



<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Topic</th>
      <th scope="col">Posted</th>
      <th scope="col">Author</th>
      <th scope="col">Replies</th>
    </tr>
  </thead>
  <tbody>


<?php 
// the lines below we process the results from the query on line 14 
while($row_get_topics = mysqli_fetch_array($query_get_topics)){
  $current_topic = $row_get_topics['id'];
  // this is where we count the number of replies for a topic. 
  $query_count_threads = mysqli_query($connect, "SELECT COUNT(*) AS id FROM threads WHERE parent_id = '$current_topic';");
  while($row_count_threads = mysqli_fetch_array($query_count_threads)){
      $replies = $row_count_threads['id'];
  }

  ?>
    <tr>
        <td>    
            <a target="_new" href="forum_thread_view.php?topic_id=<?php echo $row_get_topics['id']; ?>"> 
            <?php echo $row_get_topics['thread_subject']; ?></a> 
        </td>
        <td>
            <?php echo $row_get_topics['thread_date']; ?>
        </td>
        <td>
            <?php echo $row_get_topics['thread_owner_id']; ?>
        </td>
        <td>
            <?php echo $replies; ?>
        </td>
    </tr>
  </div>
</div>

<?php 
    }
    ?>
    </table>
    <?php
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
    <input type="hidden" name="parent_id" value="<?php echo $id; ?>">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create new topic</button>

        </form>
      </div>
    </div>
  </div>
</div> <!-- End post new topic modal --> 
