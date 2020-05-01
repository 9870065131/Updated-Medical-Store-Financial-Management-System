
   
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-text mx-3">New Diamond</div>
  </a>
  <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="addrecord.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Add Record</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewrecord.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View Record</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewcash.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View Cash</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewlog.php">
          <i class="fas fa-fw fa-list"></i>
          <span>View Log</span>
        </a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
              <div class="sidebar-brand-text mx-3">
                <marquee>
                  <h2 class="h4 mb-0 text-gray-900">
                    <b>New Diamond Medical Store</b>
                  </h2>
                </marquee>
              </div>
            </div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-1 d-none d-lg-inline text-gray-600 small">
                    <h6>
                      <strong>Heyy, </strong>
                      <?php echo $_SESSION['login']; ?>
                    </h6>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="">Cancel</button>
                  <form action="logout.php" method="POST">
                    <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                  </form>
                </div>
              </div>
            </div>
          </div>