<!-- this file should be named footer.php -->
<hr />

<p><?php 
// only an administrator should see the debug stuff:
if($access_control['role'] == "Administrator"){
    ?>
    <p>The information below is used to DEBUG your program.  It is designed for ONLY a user with role administrator. </p>
<?php 
echo '<pre>';
print_r(get_defined_vars()); 
echo '</pre>';
} else {
    ?>
    <p>Thank you for visiting. </p>
    <?php
}
?> 
</p>
