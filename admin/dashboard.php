<?php

ob_start();
session_start();
if (!isset($_SESSION['id_admin'])) {
   header('location: ./');
}
define('BASEPATH', dirname(__FILE__));

include('../includes/connection.php');
if(isset($_GET['page'])) {

    switch($_GET['page']) {
        case 'logout':
            unset($_SESSION['id_admin']);
            unset($_SESSION['user']);
            header('location: ./');
          break;
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>POS Santai | Dashboard</title>

  <!-- Bootstrap -->
  <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="./assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="./assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="./assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="./assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="./assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="./assets/build/css/custom.min.css" rel="stylesheet">

</head>

<body id="myvideo"class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="dashboard.php" class="site_title"><img src="https://media.discordapp.net/attachments/496983030993518592/722739973304090644/Watermark_POS.png" width="49" height="49"> <span> POS Navigator</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?=$_SESSION['avatar']?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?=$_SESSION['user']; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="?page=home"><i class="fa fa-home"></i> Home</a>
                </li>
                <li><a><i class="fa fa-table"></i> Form <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">

                  <li><a href="?page=discord">Discord</a></li>
                  <li><a href="?page=facebook">Facebook</a></li>
                  <li><a href="?page=instagram">Instagram</a></li>

                  </ul>
                </li>
                <li><a href="?page=permission"><i class="fa fa-cog"></i> Pengaturan Form</a>
                  <ul class="nav child_menu">
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="?page=pass">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Full Screen" onClick="document.documentElement.requestFullScreen()">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="?page=logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?=$_SESSION['avatar']?>" alt=""><?php echo "ID: {$_SESSION['id_admin']}";  ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="?page=pass"><span>Settings</span></a>
                  </li>
                  <li><a href="?page=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <?php 
          #Count Pendaftar
          $facebook = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM t_identitas WHERE platform_id = 1"));
          $instagram = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM t_identitas WHERE platform_id = 2"));
          $discord = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM t_identitas WHERE platform_id = 3"));
          
        ?>
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Pendaftar Facebook</span>
            <div class="count blue"><?=$facebook?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Pendaftar Instagram</span>
            <div class="count purple"><?=$instagram?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Pendaftar Discord</span>
            <div class="count grey"><?=$discord?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Pendaftar</span>
            <div class="count"><?=$facebook + $instagram + $discord?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Admin Aktif</span>
            <div class="count">1</div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Pengunjung</span>
            <div class="count">7,325</div>
          </div>
        </div>
        <!-- /top tiles -->

      <!-- main content -->
      <?php
        if(isset($_GET['page'])) {

          switch($_GET['page']) {
            case 'pass':
              include('./content/changepass.php');
            break;
            case 'discord':
              include('./content/platform/discord/index.php');
            break;
            case 'facebook':
              include('./content/platform/facebook/index.php');
            break;
            case 'instagram':
              include('./content/platform/instagram/index.php');
            break;
            case 'permission':
              include('./content/permission.php');
            break;
            default:
            include('./content/default.php');
            break;
          }

        } else {
          include('./content/default.php');
        }
      ?>
       
      </div>

      <!-- /page content -->


      <!-- footer content -->
        <!-- none -->
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="./assets/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="./assets/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="./assets/vendors/nprogress/nprogress.js"></script>
  <!-- ECharts -->
    <script src="./assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="./assets/vendors/echarts/map/js/world.js"></script>
  <!-- gauge.js -->
  <script src="./assets/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="./assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="./assets/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="./assets/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="./assets/vendors/Flot/jquery.flot.js"></script>
  <script src="./assets/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="./assets/vendors/Flot/jquery.flot.time.js"></script>
  <script src="./assets/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="./assets/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="./assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="./assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="./assets/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="./assets/vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="./assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="./assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="./assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="./assets/vendors/moment/min/moment.min.js"></script>
  <script src="./assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="./assets/build/js/custom.min.js"></script>

</body>

</html>