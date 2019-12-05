      <?php 
      session_start();
      include('access_control.php');

      ?>
      <!-- start nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="index.php">My Application</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php 
                    if ($access_control['role'] == "Administrator"){?>
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
                      if ($access_control['logged_in'] == "no") {
                    ?>

                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="register.php">Sign up</a>
                    </li>
                      <a class="nav-link" href="login.php">Login</a>
                    <?php
                      } else {
                    ?>
                        <a class="nav-link" href="#">You are logged in as
                        <?php echo $access_control['email']; ?> </a>
                        
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
      
