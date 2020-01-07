<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<!-- this file should be named store_navbar.php --> 
        <a class="navbar-brand" href="inventory.php">ASW School Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inventory.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store_control_panel.php">Control Panel</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php
                session_start();
                $logged_in = $_SESSION['logged_in'];
                $email = $_SESSION['logged_in_user'];
                if($logged_in == True) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link"><?php echo $email; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store_logout.php">Logout</a>
                    </li>
                <?php
                } else {
                    ?>
                <li class="nav-item">
                    <a class="nav-link" href="store_login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store_register.php">Register</a>
                </li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </nav>
