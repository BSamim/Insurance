<?php
require_once("header.php");
require_once("sidebar.php");
?>
<style>
.utf-buttons-to-right {
  opacity: 1;
}
.utf-buttons-to-right{
  top: 30px !important;
}
/*Chat sysytem css*/
.utf-job-listing-footer.main_chat_scroller{
  max-height: 42vh;
  overflow: auto;
  position: relative  ;
}
.chat_heading{
  text-align: center;
}
.rules_heading{
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 10px;
}
.icon-feather-alert-circle{
  padding-right: 6px;
}
.rules{
  text-align: center;
}
.rules>p{

  margin-bottom: 5px !important;
  color: #8c8c8c !important;
  font-size: 14px !important;
  font-weight: 600 !important;
  padding: 0px 8px !important;
  margin-bottom: 0 !important;
  margin-top: 0px !important;
}
.user-avatar {
    width: 46px;
    margin-right: 20px;
    flex: 0 0 46px;
}
.user-avatar.second{
  margin-right: unset;
  margin-left: 20px;
}
.main_message_wraper{
  margin-bottom: 20px;
}
.meassage_text_wraper{

    
    padding: 10px 20px;
    background-color: #f7f8fc;
    border-radius: 12px;
}
.meassage_text_wraper>p{
  max-width: 320px;
  margin-top: 0 !important;
}
.message_typing_area {
  position: sticky;
  bottom: 0;
}
textarea {
  position: relative !important;
    height: 56px;
    line-height: 27px;
    padding: 8px 60px 8px 20px;
    min-height: 56px;
    transition: none !important;
    min-width: 100%;
    border-radius: 20px;
    margin: 0;
    background-color: #f7f8fc;
}
a.send{
     position: absolute;
    top: 50%;
    right: 20px;
    /* bottom: 50%; */
    transform: translate(-50%, -50%);
    font-size: 20px;
        width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ff8a0052;
    border-radius: 50%;
}
.main_message_wraper {
  padding: 0 20px;
}
/*
scroolbar*/
/* width */
::-webkit-scrollbar {
  width: 4px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #2f2e41; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
/*.utf-job-listing.width-adjustment.message_all_wrapper{
  display: none;
}*/
/*chat sysytem end*/
  ul.utf-dashboard-box-list > li:hover {
    
     transform: unset; 
}
.utf-dashboard-footer-spacer-aera{
  display: none !important;
}
.utf-dashboard-content-inner-aera {
    padding: 20px 40px;
}
</style>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
 <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
  <div class="row">
   <div class="col-xl-12">  
    <h3>Chat</h3>
    <nav id="breadcrumbs">
     <ul>
      <li><a href="index.php">Home</a></li>
      <li>Chat</li>
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
          <h3>Chat</h3>
        </div>
        <div class="content">
          <ul class="utf-dashboard-box-list">
            <li> 
              <div class="utf-job-listing width-adjustment message_all_wrapper"> 
                <div class="utf-job-listing-details"> 
                  <div class="utf-job-listing-description">
                    <!-- <h3 class="utf-job-listing-title"><a href="#">Web Designer and Web Developer</a></h3> -->
                    <div class="utf-job-listing-footer main_chat_scroller">
                    
                          <div class="chat_wrapper">
                            <div class="chat_heading">
                              <h4>Welcome to Chat </h4>
                            </div>
                            <hr>
                            <div class="rules_wraper">
                              <div class="rules_heading">
                                <i class="icon-feather-alert-circle"></i>
                                <h4>Respect the rule</h4>
                              </div>
                              <div class="rules">
                                <p >lorem ipsume dollaer sit amit</p>
                                <p style="margin-bottom: 0;">lorem ipsume dollaer sit amit</p>
                                <p style="margin-bottom: 0;">lorem ipsume dollaer sit amit</p>
                                <p style="margin-bottom: 0;">lorem ipsume dollaer sit amit</p>

                                 <hr>

                              </div>
                             
                              <div class="chat">
                                <div class="time_of_message mb-5">
                                  <p class="text-center">16 AVR., 11:11</p>
                                </div>
                                <div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                  <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                    <img src="images/user_small_1.jpg">
                                  </div>
                                  <div class="meassage_text_wraper pl-lg-4 pl-2 pr-lg-2 pr-1 py-lg-3 py-2">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:</  </p>
                                  </div>
                                </div>
                                <div class="main_message_wraper d-flex justify-content-end px-lg-5 px-1">
                                  <div class="meassage_text_wraper bg_danger ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                    <p class="m-0" style="margin-left: auto;">Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:Lorem ipsum dolor sit amet, consectetur adipiscing elit:</p>
                                  </div>
                                  <div class="message_img_wraper user-avatar second status-online me-3 shadow">
                                    <img src="images/user_small_1.jpg">
                                  </div>
                                </div>
                                <div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                  <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                    <img src="images/user_small_1.jpg">
                                  </div>
                                  <div class="meassage_text_wraper pl-lg-4 pl-2 pr-lg-2 pr-1 py-lg-3 py-2">
                                    <p class="m-0">Lorem ipsum dolor sit amet, conse  </p>
                                  </div>
                                </div>
                                <div class="main_message_wraper d-flex justify-content-end px-lg-5 px-1">
                                  <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                    <p class="m-0" style="margin-left: auto;">Lorem i</p>
                                  </div>
                                  <div class="message_img_wraper user-avatar second status-online me-3 shadow">
                                    <img src="images/user_small_1.jpg">
                                  </div>
                                </div>
                                <div class="message_typing_area px-lg-5 px-1">
                                  <textarea   class="form-control" id="exampleFormControlTextarea1" placeholder="Write your message"></textarea>
                                  <a href="javascript:void(0)" class="send"><i class="icon-feather-send"></i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </li>
            
            
        </ul>
      </div>
    </div>
  </div>
</div>
  <script>
    function toggle_fv(clicked_id) {
      var NAME = document.getElementById(clicked_id)
      NAME.classList.toggle("icon-material-outline-favorite");
    }
  </script>
  <?php
  require_once("dashboard_footer.php");
?>