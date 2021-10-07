<?php
  session_start();
  $id=$_SESSION['id'];
  if (!$id) {
    header('location:../index.php');
  }
  require_once("../database.php");
  $date = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="">
  <meta name="theme-color" content="#ff8a00">
  <meta name="description" content="Job Portal HTML Template">
  <meta name="keywords" content="Employment, Naukri, Shine, Indeed, Job Posting, Job Provider">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Softrobo</title>
  <!--  Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet">
</head>
<style>
  li a {

    font-weight: 900 !important;
    letter-spacing: 1px;

  }
</style>

<body>
  <!-- Preloader Start -->
  <div class="preloader">
    <div class="utf-preloader">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
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
                 <li><a href="../index.php">Home</a></li>
                <li><a href="../about-us.php">About</a></li>
                <li><a href="../post.php">Need Insurance?</a></li>
                <li><a href="../job.php">Are You an Agent?</a></li>
                <li><a href="../contact.php">Contact</a></li>
              </ul>
            </nav> 
            <div class="clearfix"></div>
          </div>
          <div class="utf-right-side">
            <div class="utf-header-widget-item"> <a href="user_action.php?user_logout" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Logout</span></a> </div>
           
            <span class="mmenu-trigger">
              <button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </button>
            </span>
          </div>
        </div>
      </div>
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->