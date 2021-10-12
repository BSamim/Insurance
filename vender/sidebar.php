<?php
session_start();
$id = $_SESSION["ins_vendor_id"];
if (!$id) {
  header('location:../index.php');
}
$queryToGetAllSections = "SELECT * FROM vendors WHERE id = '$id'";
$result = db::getRecord($queryToGetAllSections);
?>
<!-- Dashboard Container -->
<div class="utf-dashboard-container-aera">
  <!-- Dashboard Sidebar -->
  <div class="utf-dashboard-sidebar-item">
    <div class="utf-dashboard-sidebar-item-inner" data-simplebar>
      <div class="utf-dashboard-nav-container">
        <!-- Responsive Navigation Trigger -->
        <a href="#" class="utf-dashboard-responsive-trigger-item"> <span class="hamburger utf-hamburger-collapse-item"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </span> <span class="trigger-title">Dashboard Navigation Menu</span> </a>
        <!-- Navigation -->
        <div class="utf-dashboard-nav">
          <div class="utf-dashboard-nav-inner">
            <div class="dashboard-profile-box">
              <span class="avatar-img">
                <?php
                if (!$result['picture']) {
                ?>
                <img alt="" src="images/user-avatar-placeholder.png" class="photo">
                <?php
                }else{
                ?>
                <img alt="" src="images/<?php echo $result['picture']; ?>" class="photo">
                <?php }?>
              </span>
              <div class="user-profile-text">
                <span class="fullname"><?php echo $result['username']; ?></span>
                <span class="user-role"><?php echo $result['company']; ?></span>
              </div>
            </div>
            <div class="clearfix"></div>
            <ul>
              <li class="active"><a href="index.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
              <li><a href="post_forum.php"><i class="icon-line-awesome-user-secret"></i> Post Forum</a></li>
              <li><a href="intrested_posts.php"><i class="icon-feather-heart"></i> Intrested Quotes</a></li>
              <li><a href="subcription.php"><i class="icon-feather-user"></i>Subscription</a></li>
              <!-- <li><a href="active_rfq.php"><i class="icon-material-outline-supervisor-account"></i> Active RFQ</a></li>
          <li><a href="inactive_rfq.php"><i class="icon-feather-heart"></i> Inactive RFQ</a></li>-->
              <li><a href="vendor_profile.php"><i class="icon-feather-user"></i> My Profile</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dashboard Sidebar / End -->