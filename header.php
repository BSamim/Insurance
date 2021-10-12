<?php
session_start();
$userid='';
$vendorid = '';
if (isset($_SESSION['ins_user_id'])) {
  $userid = $_SESSION['ins_user_id'];
}
if (isset($_SESSION['ins_vendor_id'])) {
  $vendorid = $_SESSION['ins_vendor_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="">
  <meta name="theme-color" content="#ff8a00">
  <meta name="keywords" content="Employment, Naukri, Shine, Indeed, Job Posting, Job Provider">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Softrobo</title>
  <!--  Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="jquery-animation/css/animations.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
  li a {

    font-weight: 900 !important;
    letter-spacing: 1px;

  }

  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  input[type="text"],
  input[type="password"],
  input[type="email"],
  textarea,
  select,
  input[type="button"],
  input[type="submit"],
  button,
  body .pac-container {
    /*font-family: 'Poppins', sans-serif;*/
    font-family: 'PT Sans', sans-serif;
  }
</style>

<body>
  <!-- Preloader Start -->
  <!-- <div class="preloader">
    <div class="utf-preloader">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> -->
  <!-- Preloader End -->

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Header Container -->
    <header id="utf-header-container-block">
      <div id="header">
        <div class="container">
          <div class="utf-left-side">
            <div id="logo" style="width:20%;"> <a href="index.php"><img src="images/logo3.png" style="width: 100%; height: 100%;object-fit: contain;" alt=""></a> </div>
            <nav id="navigation">
              <ul id="responsive">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About</a></li>
                <?php
                if (!$userid && !$vendorid) {
                ?>
                  <li><a href="post.php">Need Insurance?</a></li>
                  <li><a href="job.php">Are You an Agent?</a></li>
                <?php
                } elseif ($vendorid) {
                ?>
                  <li><a href="vender/index.php">Dashboard</a></li>
                <?php
                } elseif ($userid) {
                ?>
                  <li><a href="user/index.php">Dashboard</a></li>
                <?php
                }
                ?>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
            <div class="clearfix"></div>
          </div>

          <div class="utf-right-side">
            <div class="utf-header-widget-item"> <a href="#utf-signin-dialog-block" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Sign In</span></a> </div>
            <div class="utf-header-widget-item">
              <div class="utf-header-notifications user-menu">
                <div class="utf-header-notifications-trigger user-profile-title">
                  <a href="#">
                    <div class="user-avatar status-online"><img src="images/user_small_1.jpg" alt=""> </div>
                    <div class="user-name" style="  font-weight: 900 !important;letter-spacing: 1px;">Hi, John!</div>
                  </a>
                </div>
                <div class="utf-header-notifications-dropdown-block">
                  <ul class="utf-user-menu-dropdown-nav">
                    <li><a href="dashboard.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="icon-feather-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <span class="mmenu-trigger">
              <button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </button>
            </span>
          </div>
        </div>
      </div>
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->