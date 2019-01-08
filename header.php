      <?php 
      session_start();
      $logged_in = $_SESSION['logged_in'];
      ?>
      <!-- start nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">My Application</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php 
                    if ($logged_in){?>
                    <li class="nav-item">
                      <a class="nav-link" href="users.php">Manage users</a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>

                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <?php 
                      if ($logged_in == False) {
                    ?>

                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="register.php">Sign up</a>
                    </li>
                      <a class="nav-link" href="login.php">Login</a>
                    <?php
                      } else {
                        $email = $_SESSION['email'];
                    ?>
                        <a class="nav-link" href="#">You are logged in as
                        <?php echo $email; ?> </a>
                        
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                    <?php
                      }
                    ?>
                    
                    
                    </li>
                  </ul>
                </div>
        </nav>
      <!-- end nav bar -->
      
