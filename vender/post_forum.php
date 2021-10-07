<?php
require_once("header.php");
require_once("sidebar.php");
$_id = $_SESSION['id'];
//Read Data
$queryToGetActiveQuotes = "SELECT * FROM quotes WHERE effective_date >= '$date'";
$results = db::getRecords($queryToGetActiveQuotes);
?>
<style>
  .utf-buttons-to-right {
    opacity: 1;
  }

  .utf-buttons-to-right {
    top: 30px !important;
  }

  /*.utf-job-listing.width-adjustment.message_all_wrapper{
  display: none;
}*/
  /*chat sysytem end*/
  ul.utf-dashboard-box-list>li:hover {

    transform: unset;
  }
</style>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
    <div class="row">
      <div class="col-xl-12">
        <h3>Post Forum</h3>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Post Forum</li>
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
            <h3>Posts</h3>
          </div>
          <div class="content">
            <ul class="utf-dashboard-box-list">
              <?php
              if ($results) {
                foreach ($results as $result) {
              ?>
                  <li>
                    <div class="utf-job-listing width-adjustment">
                      <div class="utf-job-listing-details">
                        <div class="utf-job-listing-description">
                          <h3 class="utf-job-listing-title"><a href="#"><?php echo $result['business_name']; ?></a></h3>
                          <div class="utf-job-listing-footer">
                            <ul>
                              <li><i class="icon-line-awesome-tasks"></i><?php echo $result['insurance_type']; ?></li>
                              <li><i class="icon-material-outline-date-range"></i><?php echo $result['time_stamp']; ?></li>
                              <li><i class="icon-feather-briefcase"></i><?php echo $result['business_type']; ?></li>
                              <li><i class="icon-material-outline-location-on"></i><?php echo $result['city']; ?>, <?php echo $result['state']; ?></li>
                              <li><i class="icon-line-awesome-dollar"></i><?php echo $result['gross_sales']; ?></li>
                            </ul>
                            <a href="files/<?php echo $result['file']; ?>" download>Download Attachment</a>
                            <p><?php echo $result['description']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <ul class="dashboard-task-info">
                      <li><a href="chat.php"><span>Chat</span></a></li>
                    </ul>
                    <ul class="dashboard-task-info">
                      <li><span><b>Effective Date: </b><?php echo $result['effective_date']; ?></span></li>
                    </ul>
                    <div class="utf-buttons-to-right">
                      <?php
                        $_quote_id=$result['id'];
                        $queryToCheckInterestedQuote= "SELECT * FROM interested_quotes WHERE quote_id='$_quote_id' AND vendor_id= '$_id' ";
                        $data = db::getRecord($queryToCheckInterestedQuote);
                        if($data){
                      ?>
                      <a href="vendor_action.php?remove_interested_quote=<?php echo $result['id']; ?>&vendor=<?php echo $_id; ?>" class="button red ripple-effect ico" title="Uninterested" data-tippy-placement="top"><i id="fv1" class="icon-material-outline-favorite" onclick="toggle_fv(this.id)"></i></a>
                      <?php }else{ ?>
                      <a href="vendor_action.php?interested_quote=<?php echo $result['id']; ?>&vendor=<?php echo $_id; ?>" class="button red ripple-effect ico" title="Interested" data-tippy-placement="top"><i id="fv1" class="icon-material-outline-favorite-border" onclick="toggle_fv(this.id)"></i></a>
                      <?php } ?>
                    </div>
                  </li>
              <?php
                }
              }
              ?>
              <!-- <li>
                <div class="utf-job-listing width-adjustment">
                  <div class="utf-job-listing-details">
                    <div class="utf-job-listing-description">
                      <h3 class="utf-job-listing-title"><a href="#">Commercial Insurance</a></h3>
                      <div class="utf-job-listing-footer">
                        <ul>
                          <li><i class="icon-material-outline-date-range"></i> 12 Jan, 2021 12:30 PM</li>
                          <li><i class="icon-feather-briefcase"></i> Commercial Insurance</li>
                          <li><i class="icon-material-outline-location-on"></i> 2767 Concord Street, Charlotte</li>
                        </ul>
                        <a href="">Document.pdf</a>
                        <p>Switching car insurance companies is a great way to help you get the most for your money.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="dashboard-task-info">
                  <li><a href="chat.php"><span>Chat</span></a></li>
                  <li><span>Efected Date</span></li>
                </ul>
                <div class="utf-buttons-to-right">
                  <a href="#" class="button red ripple-effect ico" title="Interested" data-tippy-placement="top"><i id="fv2" class="icon-material-outline-favorite-border" onclick="toggle_fv(this.id)"></i></a>
                </div>

              </li>
              <li>
                <div class="utf-job-listing width-adjustment">
                  <div class="utf-job-listing-details">
                    <div class="utf-job-listing-description">
                      <h3 class="utf-job-listing-title"><a href="#">Commercial Insurance</a></h3>
                      <div class="utf-job-listing-footer">
                        <ul>
                          <li><i class="icon-material-outline-date-range"></i> 12 Jan, 2021 12:30 PM</li>
                          <li><i class="icon-feather-briefcase"></i> Commercial Insurance</li>
                          <li><i class="icon-material-outline-location-on"></i> 2767 Concord Street, Charlotte</li>
                        </ul>
                        <a href="">Document.pdf</a>
                        <p>Switching car insurance companies is a great way to help you get the most for your money.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="dashboard-task-info">
                  <li><a href="chat.php"><span>Chat</span></a></li>
                  <li><span>Efected Date</span></li>
                </ul>
                <div class="utf-buttons-to-right">
                  <a href="#" class="button red ripple-effect ico" title="Interested" data-tippy-placement="top"><i id="fv" class="icon-material-outline-favorite-border" onclick="toggle_fv(this.id)"></i></a>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">


    //Jquery Document
    $(document).ready(function() {
    $("#aa").on('click', function() {
      $id=document.getElementById('aa')
      $id.classList.toggle("icon-material-outline-favorite");
     

    })
  });

   //Jquery Document
   $(document).ready(function() {
    $("#bb").on('click', function() {
      $id=document.getElementById('bb')
      $id.classList.toggle("icon-material-outline-favorite");
     

    })
  });
    // function changeclass() {
    //   var NAME = document.getElementById("fv")
    //   if($("#fv").hasClass("liked")){
    //     NAME.className="icon-material-outline-favorite-border"
    //     $("#fv").removeClass('liked');
    //   }else{
    //     NAME.className="icon-material-outline-favorite"
    //     $("#fv").addClass('liked');
    //   }
    // } 
  </script> -->
    <script>
      function toggle_fv(clicked_id) {
        var NAME = document.getElementById(clicked_id)
        NAME.classList.toggle("icon-material-outline-favorite");
      }
    </script>
    <?php
    require_once("dashboard_footer.php");
    ?>