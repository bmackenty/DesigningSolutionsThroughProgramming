<!-- this file should be named footer.php -->
<hr />
<p>The information below is used to DEBUG your program. 
It is designed for ONLY the developer to see. When your web application "goes live" you will REMOVE this code</p>
<p><?php 
echo '<pre>';
print_r(get_defined_vars()); 
echo '</pre>';
?>
</p>
