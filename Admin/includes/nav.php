  
<!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.js"></script>

  <!-- Navbar -->
<nav class="main-header navbar navbar-expand" style="background-color: #162136; position: sticky; top: 0; z-index: 1000;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link"><h5>ARTA Admin Panel</h5></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <!-- User Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="profile.php" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> &nbsp <?php echo $_SESSION['Name']; ?>
            </a>
            <div class="dropdown-divider"></div>
            <!-- Log Out link with id -->
            <a href="logout.php" id="logoutLink" class="dropdown-item">
              <i class="fas fa-power-off mr-2"></i> Log Out
            </a>
          </div>
        </li>


        <!-- Fullscreen Button -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
