<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style type="text/css">
        .brand-link:hover {
      color: white !important;
    }
</style>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5" style=" background-color: #151E2F;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="assets/images/dolelogs.png" alt="DOLA Logo" class="brand-image img-fluid elevation-2" style="opacity: .8; width: 35px;">
      <span class="brand-text font-weight-light"> &nbsp <b>DOLE X - CDO FO</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item">
                <a href="./index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                    <i class="fa fa-home nav-icon"></i> <!-- Dashboard icon -->
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item has-treeview <?php echo in_array($current_page, ['consolidatedReport.php', 'livelihood.php', 'CSHP.php', 'workerAssoc.php', '1020.php', 'otherServices.php']) ? 'menu-open' : ''; ?>"  >
                <a href="consolidatedReport.php" class="nav-link <?php echo in_array($current_page, ['consolidatedReport.php', 'livelihood.php', 'CSHP.php', 'workerAssoc.php', '1020.php', 'otherServices.php']) ? 'active' : ''; ?>">
                    <i class="nav-icon fas fa-chart-line"></i> <!-- Survey Result/Analytics icon -->
                    <p>Survey Result <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview"style='background-color: #202d46;'> 
                    <li class="nav-item">
                        <a href="consolidatedReport.php" class="nav-link <?php echo ($current_page == 'consolidatedReport.php') ? 'active' : ''; ?>">
                            <i class="fas fa-file-alt nav-icon"></i> <!-- Report icon -->
                            <p>Consolidated Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="livelihood.php" class="nav-link <?php echo ($current_page == 'livelihood.php') ? 'active' : ''; ?>">
                            <i class="fas fa-folder nav-icon"></i>
                            <p>Livelihood</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="CSHP.php" class="nav-link <?php echo ($current_page == 'CSHP.php') ? 'active' : ''; ?>">
                            <i class="fas fa-folder nav-icon"></i>
                            <p>CSHP</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="workerAssoc.php" class="nav-link <?php echo ($current_page == 'workerAssoc.php') ? 'active' : ''; ?>">
                            <i class="fas fa-folder nav-icon"></i>
                            <p>Worker's Association</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="1020.php" class="nav-link <?php echo ($current_page == '1020.php') ? 'active' : ''; ?>">
                            <i class="fas fa-folder nav-icon"></i>
                            <p>RULE 1020</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="otherServices.php" class="nav-link <?php echo ($current_page == 'otherServices.php') ? 'active' : ''; ?>">
                            <i class="fas fa-folder nav-icon"></i>
                            <p>Other Services</p>
                        </a>
                    </li>    
                  </ul>
            </li>

            <!-- Transactions -->
            <li class="nav-item">
                <a href="archiveReport.php" class="nav-link <?php echo ($current_page == 'archiveReport.php') ? 'active' : ''; ?>">
                    <i class="fa fa-archive nav-icon"></i> <!-- History icon -->
                    <p>Archive Logs</p>
                </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>