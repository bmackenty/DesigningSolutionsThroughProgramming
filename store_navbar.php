<!-- this file should be named store_navbar -->
<?php 
session_start(); 
?>
<nav class="navbar justify-content-center navbar-expand-lg navbar-light" style="background-color: #009900;">
  <div class="container-fluid">
    <a class="navbar-brand" href="store_index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <?php 
      if($_SESSION['logged_in']) {
        ?>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"><?php echo $_SESSION['logged_in_user']; ?></a>
      </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="store_logout.php">Logout</a>
        </li>
        
        
        <?php
        // This section of code will only show the control if the user has 'admin' as their role.  
        // you can change the admin role in phpmyadmin to whatever you want.
        // users are in the users table.
        
          if($_SESSION['logged_in_role'] == 'admin') {
            ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="store_control_panel.php">control panel</a>
        </li>
        <?php } ?>



    </ul>
    <?php 
      } else {
          ?>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="store_login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="store_register.php">Register</a>
        </li>
    </ul>
    <?php } ?>
    
    </div>
  </div>
</nav>
