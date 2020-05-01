<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/db.php');
error_reporting(0);

?>
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admin</div>
              <div class="h6 mb-0 font-weight-bold text-gray-800">
                <?php
                  $result = mysqli_query($mysqli, "SELECT username FROM user");
                  $row_cnt = mysqli_num_rows($result);
                  echo $row_cnt;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Last Login Time:</div>
              <div class="h6 mb-0 font-weight-bold text-gray-800">
                <?php
                  $query = mysqli_query($mysqli, "SELECT loginTime FROM userlog ORDER BY id DESC LIMIT 1");
                  while($row=mysqli_fetch_array($query))
                    {
                      echo $row['loginTime'];
                    }
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas  fa-clock fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Last Login User:</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php
                  $query = mysqli_query($mysqli, "SELECT username FROM userlog ORDER BY id DESC LIMIT 1,1");
                  while($row=mysqli_fetch_array($query))
                    {
                      echo $row['username'];
                    }
                ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
include('includes/footer.php');
?>