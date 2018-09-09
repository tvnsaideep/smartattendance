<?php
session_start();
$user=$_SESSION['username'];
    $count=0;
$conn=new mysqli("localhost","root","","attn") or die('connecting error'.$conn->connect_error);
?><!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attendance online</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center ">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="images/log.png" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="pages/charts/schedule.php" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="pages/charts/chart.php" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>

        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have  unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <?php
              $curdate=date("Y-m-d");

              $msgq=mysqli_query($conn,"select * from messages where date='$curdate'");
              while($msgrow=mysqli_fetch_assoc($msgq))
              {
                if($msgrow['name']==$user)
                {
                  echo '
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="login/images/icons/avatar.png" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">ADMIN
                    <span class="float-right font-weight-light small-text">Today</span>
                  </h6>
                  <p class="font-weight-light small-text">'.$msgrow['message'].'
                  </p>
                </div>
              </a>';
              $count=$count+1;
            }
            } ?>
            </div>
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count"><?php echo $count;?></span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Your remainder</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a><!--
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>-->
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, <?php echo $_SESSION['username'];?>!</span>
              <img class="img-xs rounded-circle" src="login/images/icons/avatar.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0" href="setremainder.php">
                <div class="d-flex border-bottom">
                  <!--<div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>-->
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray">set remainder</i>
                  </div>
                </div>
              </a>
              <!--<a class="dropdown-item mt-2">
                Manage Accounts
              </a>-->
              <a href="pages/forms/changepassword.php"class="dropdown-item">
                Change Password
              </a>
            <!--  <a class="dropdown-item">
                Check Inbox
              </a>-->
              <a href="login/logout.php"class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="login/images/icons/avatar.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['username'];?></p>
                  <div>
                    <small class="designation text-muted"><?php echo $_SESSION['branch'];?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="pages/tables/take_attn.php"<button class="btn btn-success btn-block">Take Attendance
                <i class="mdi mdi-plus"></i>
              </button></a>
            </div>
          </li>
          <li class="nav-item Active">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chart.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
    <!--      <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Status</span>
            </a>
          </li>-->


        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
                <?php
                $date=date("Y-m-d");
                $alq=mysqli_query($conn,"SELECT stat from status where name='$user' AND `date`='$date'");
                $alrow=mysqli_fetch_assoc($alq);
                if($alrow['stat']==0){
                  echo '
                <p>Forgot to take attendance today?? &nbsp;&nbsp;Hurry up .....</p>
                <a href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Take Attendance Now</a>
                <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank" class="btn purchase-button">Submit Later</a>
                <i class="mdi mdi-close popup-dismiss"></i>';
              }
              ?>
              </span>
            </div>
          </div>
          <?php

          $sel=mysqli_query($conn,"select * from attn_day");
          $date=date('Y-m-d');
          $present=0;
          $absent=0;
          while($rowc=mysqli_fetch_assoc($sel))
          {
            if($rowc['date']==$date)
            {
              if($rowc['attn_status']==1)
              {
              $present=$present+1;
              }
              else
              {
                $absent++;
              }
            }
          }
           ?>

          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Present</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $present;?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>
                    <a href="attn_details_today_present.php">View Details</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Absentees</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $absent;?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>
                    <a href="attn_details_today.php">View Details</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Present %</p>
                      <div class="fluid-container">
                        <?php
                        if($present!=0)
                        {
                         $hp=($present)/($present+$absent)*100;
                       }
                       else {
                         $hp=0;
                       }

                         ?>
                        <h3 class="font-weight-medium text-right mb-0"><?php echo number_format((float)$hp,2,'.','');?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i>
                     % based
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Hit List</p>
                      <?php
                      $count='0';
                      $hquery=mysqli_query($conn,"select * from percentage where attnper between 75 and 78");
                      while($hrow=mysqli_fetch_assoc($hquery))
                      {
                        $count=$count+1;
                      }
                       ?>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $count;?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i>
                    <a href="pages/tables/attn_hitlist.php">View Details</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php
             $rox=mysqli_query($conn,"select * from staffinfo where name='$user'");
             $weekrow=mysqli_fetch_assoc($rox);
             $mon=$weekrow['m'];
             $tue=$weekrow['t'];
             $wed=$weekrow['w'];
             $thu=$weekrow['th'];
             $fri=$weekrow['f'];
             ?>
            <div class="col-lg-7 grid-margin stretch-card">
              <!--weather card-->
              <div class="card card-weather">
                <div class="card-body">
                  <div class="weather-date-location">
                    <h3>Monday</h3>
                    <p class="text-gray">
                      <span class="weather-date">25 October, 2016</span>
                      <span class="weather-location">PBR VITS</span>
                    </p>
                  </div>
                  <div class="weather-data d-flex">
                    <div class="mr-auto">
                      <h4 class="display-3"><?php echo $mon;?>
                        <span class="symbol"></span>Classes</h4>
                      <p>

                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="d-flex weakly-weather">
                    <div class="weakly-weather-item">
                      <p class="mb-0">
                        Sun
                      </p>
                      <i class="mdi mdi-emoticon-cool"></i>
                      <p class="mb-0">
                        	0
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Mon
                      </p>
                      <i class="mdi mdi-emoticon-devil"></i>
                      <p class="mb-0">
                        <?php echo $mon;?>
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Tue
                      </p>
                      <i class="mdi mdi-emoticon-sad"></i>
                      <p class="mb-0">
                        <?php echo $tue;?>
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Wed
                      </p>
                      <i class="mdi mdi-emoticon-neutral"></i>
                      <p class="mb-0">
                        <?php echo $wed;?>
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        thu
                      </p>
                      <i class="mdi mdi-emoticon-happy"></i>
                      <p class="mb-0">
                        <?php echo $thu;?>
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Fri
                      </p>
                      <i class="mdi mdi-emoticon-tongue"></i>
                      <p class="mb-0">
                        <?php echo $fri;?>
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Sat
                      </p>
                      <i class="mdi mdi-emoticon"></i>
                      <p class="mb-0">
                        0
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--weather card ends-->
            </div>
            <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Performance History(week)</h2>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <?php
                      $bsel=mysqli_query($conn,"select * from attn_day where date >=DATE_SUB(curdate(),INTERVAL 1 WEEK)");
                      $wsel=mysqli_query($conn,"select * from attn_day where date >=DATE_SUB(curdate(),INTERVAL 2 WEEK)");
                      $count=0;
                      $rc=0;
                      $present=0;
                      $absent=0;
                      while($row=mysqli_fetch_assoc($bsel))
                      {
                        if($row['attn_status']==1)
                        {
                          $count=$count+1;
                          $present=$present+1;
                        }
                        if($row['attn_status']==0)
                        {
                          $absent=$absent+1;
                        }
                        $rc=$rc+1;
                      }
                      if($rc!=0)
                      {
                      $bper=($count/$rc)*100;
                    }
                    else {
                      $bper=0;
                    }

                      while($row=mysqli_fetch_assoc($wsel))
                      {
                        if($row['attn_status']==1)
                        {
                          $count=$count+1;
                        }
                        $rc=$rc+1;
                      }
                      if($rc>0)
                      {
                      $wper=($count/$rc)*100;
                    }
                    else {
                      $wper=0;
                    }
                      if($bper>$wper)
                      {
                        $best=$bper;
                        $worst=$wper;
                      }
                      else {
                        $best=$wper;
                        $worst=$bper;
                      }
                      if($present>0)
                      {
                      $pre=($present/($present+$absent))*100;
                      $abs=($absent/($present+$absent))*100;
                      $pre=number_format((float)$pre,'2','.','');
                      $abs=number_format((float)$abs,'2','.','');
                    }
                    else {
                      $pre=0;
                      $abs=0;
                    }

                       ?>
                      <p class="mb-2">The best performance</p>
                      <p class="display-3 mb-4 font-weight-light"><?php echo number_format((float)$best,'2','.','');?></p>
                    </div>
                    <div class="side-right">
                      <small class="text-muted">2017</small>
                    </div>
                  </div>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <p class="mb-2">Worst performance</p>
                      <p class="display-3 mb-5 font-weight-light">-<?php echo number_format((float)$worst,'2','.','');?></p>
                    </div>
                    <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div>
                  </div>
                  <div class="wrapper">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">present</p>
                      <p class="mb-2 text-primary"><?php echo $pre;?></p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $pre;?>%" aria-valuenow="88"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Absent</p>
                      <p class="mb-2 text-success"><?php echo $abs;?>%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $abs;?>%" aria-valuenow="56"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="login/index.php" target="_blank">Smart Attendance</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
