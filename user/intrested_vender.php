<?php
require_once("header.php");
require_once("sidebar.php");
$_id = $_SESSION['id'];
//Get Interested Quote ID
$queryToGetInterestedQuoteId = "SELECT * FROM interested_quotes WHERE user_id = '$_id'";
$results = db::getRecords($queryToGetInterestedQuoteId);
$Interested_vendors_id = '';
$Interested_quote_id = '';
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
    <div class="row">
      <div class="col-xl-12">
        <h3>Intrested Vender</h3>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li>Intrested Vender</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="utf-dashboard-content-inner-aera">
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">
          <div class="headline">
            <h3>Manage Intrested Vender</h3>
          </div>
          <div class="content">
            <ul class="utf-dashboard-box-list">
              <?php
              if ($results) {
                foreach ($results as $result) {
                  $Interested_vendor_id = $result['vendor_id'];
                  $Interested_quote_id = $result['quote_id'];
                  //Read Data
                  $queryToGetInterestedVendors = "SELECT * FROM vendors WHERE id = '$Interested_vendor_id'";
                  $queryToGetInterestedQuotes = "SELECT * FROM quotes WHERE id = '$Interested_quote_id'";
                  $Interested_vendor = db::getRecord($queryToGetInterestedVendors);
                  $Interested_quote = db::getRecord($queryToGetInterestedQuotes);
                }
              
              ?>
              <li>
                <div class="utf-manage-resume-overview-aera utf-manage-candidate">
                  <div class="utf-manage-resume-overview-aera-inner">
                    <div class="utf-manage-resume-avatar">
                    <?php
                        if(!$Interested_vendor['picture']){
                      ?>
                      <a href="vender_detail.php"><img src="images/user_big_1.jpg" alt=""></a>
                      <?php 
                        }else{
                      ?>
                      <a href="vender_detail.php"><img src="../vender/images/<?php echo $Interested_vendor['picture']; ?>" alt=""></a>
                      <?php 
                        }
                      ?>
                    </div>
                    <div class="utf-manage-resume-item">
                      <h4><a href="#"><?php echo $Interested_vendor['username']; ?></a></h4>
                      <span class="utf-manage-resume-detail-item"><a href="#"><i class="icon-feather-mail"></i><?php echo $Interested_vendor['email']; ?></a></span>
                      <?php
                        if(!$Interested_vendor['phone']){
                      ?>
                      <span class="utf-manage-resume-detail-item"><i class="icon-feather-phone"></i>contact number not given</span>
                      <?php 
                        }else{}
                      ?>
                      <span class="utf-manage-resume-detail-item"><i class="icon-feather-phone"></i><?php echo $Interested_vendor['phone']; ?></span>
                      <div class="utf-buttons-to-right">
                        <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                      </div>
                      <span class="utf-manage-resume-detail-item"><a href="#"><?php echo $Interested_quote['business_name']; ?></a></span>
                    </div>
                  </div>
                </div>
              </li>
              <?php
              }
              ?>
              <!-- <li>
                <div class="utf-manage-resume-overview-aera utf-manage-candidate">
                  <div class="utf-manage-resume-overview-aera-inner">
                    <div class="utf-manage-resume-avatar">
                      <a href="vender_detail.php"><img src="images/user_big_2.jpg" alt=""></a>
                    </div>
                    <div class="utf-manage-resume-item">
                      <h4><a href="#">John Williams</a></h4>
                      <span class="utf-manage-resume-detail-item"><a href="#"><i class="icon-feather-mail"></i> demo@example.com</a></span>
                      <span class="utf-manage-resume-detail-item"><i class="icon-feather-phone"></i> (+12) 0123-654-987</span>
                      <div class="utf-buttons-to-right">
                        <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                      </div>
                      <span class="utf-manage-resume-detail-item"><a href="#"> Commercial Insurance</a></span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="utf-manage-resume-overview-aera utf-manage-candidate">
                  <div class="utf-manage-resume-overview-aera-inner">
                    <div class="utf-manage-resume-avatar">
                      <a href="vender_detail.php"><img src="images/user_big_3.jpg" alt=""></a>
                    </div>
                    <div class="utf-manage-resume-item">
                      <h4><a href="#">John Williams</a></h4>
                      <span class="utf-manage-resume-detail-item"><a href="#"><i class="icon-feather-mail"></i> demo@example.com</a></span>
                      <span class="utf-manage-resume-detail-item"><i class="icon-feather-phone"></i> (+12) 0123-654-987</span>
                      <div class="utf-buttons-to-right">
                        <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                      </div>
                      <span class="utf-manage-resume-detail-item"><a href="#"> Commercial Insurance</a></span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="utf-manage-resume-overview-aera utf-manage-candidate">
                  <div class="utf-manage-resume-overview-aera-inner">
                    <div class="utf-manage-resume-avatar">
                      <a href="vender_detail.php"><img src="images/user_big_1.jpg" alt=""></a>
                    </div>
                    <div class="utf-manage-resume-item">
                      <h4><a href="#">John Williams</a></h4>
                      <span class="utf-manage-resume-detail-item"><a href="#"><i class="icon-feather-mail"></i> demo@example.com</a></span>
                      <span class="utf-manage-resume-detail-item"><i class="icon-feather-phone"></i> (+12) 0123-654-987</span>
                      <div class="utf-buttons-to-right">
                        <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                      </div>
                      <span class="utf-manage-resume-detail-item"><a href="#"> Commercial Insurance</a></span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="utf-manage-resume-overview-aera utf-manage-candidate">
                  <div class="utf-manage-resume-overview-aera-inner">
                    <div class="utf-manage-resume-avatar">
                      <a href="vender_detail.php"><img src="images/user_big_2.jpg" alt=""></a>
                    </div>
                    <div class="utf-manage-resume-item">
                      <h4><a href="#">John Williams</a></h4>
                      <span class="utf-manage-resume-detail-item"><a href="#"><i class="icon-feather-mail"></i> demo@example.com</a></span>
                      <span class="utf-manage-resume-detail-item"><i class="icon-feather-phone"></i> (+12) 0123-654-987</span>
                      <div class="utf-buttons-to-right">
                        <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                      </div>
                      <span class="utf-manage-resume-detail-item"><a href="#"> Commercial Insurance</a></span>
                    </div>
                  </div>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="utf-pagination-container-aera margin-top-20 margin-bottom-0">
          <nav class="pagination">
            <ul>
              <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
              <li><a href="#" class="ripple-effect current-page">1</a></li>
              <li><a href="#" class="ripple-effect">2</a></li>
              <li><a href="#" class="ripple-effect">3</a></li>
              <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
            </ul>
          </nav>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <?php
    require_once("dashboard_footer.php");
    ?>