<?php
session_start();
$id = $_SESSION['ins_user_id'];
require_once("../database.php");
$db = db::open();

//Get a Quote
if (isset($_POST['get_quote'])) {
    $business_name = $_POST['business_name'];
    $effective_date = $_POST['effective_date'];
    $gross_sales = $_POST['gross_sales'];
    $business_type = $_POST['business_type'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $insurance_type = $_POST['insurance_type'];
    $description = $_POST['description'];
    $user_id = $id;
    $status = 'active';

    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "files/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "INSERT INTO quotes (business_name, file, effective_date, gross_sales, business_type, city, state, insurance_type, description, user_id, quote_status) VALUES ('$business_name', '$final_file', '$effective_date', '$gross_sales', '$business_type', '$city', '$state', '$insurance_type', '$description','$id', '$status')";
    db::query($sql);
    echo "<script>location='active_rfq.php'</script>";
}

//Delete an active Quote
if (isset($_GET['del_active_quote'])) {
    $quote_id = $_GET['del_active_quote'];

    $del_query = "DELETE FROM quotes WHERE id='$quote_id'";
    $res = db::query($del_query);

    echo "<script>location='active_rfq.php?status=1'</script>";
}

//Delete an inactive Quote
if (isset($_GET['del_inactive_quote'])) {
    $quote_id = $_GET['del_inactive_quote'];

    $del_query = "DELETE FROM quotes WHERE id='$quote_id'";
    $res = db::query($del_query);

    echo "<script>location='inactive_rfq.php?status=1'</script>";
}
//Deactivate an active Quote
if (isset($_GET['deactivate_quote'])) {
    $quote_id=$_GET['deactivate_quote'];
    $query = "UPDATE quotes SET quote_status='inactive' WHERE id = '$quote_id'";
    db::query($query);
    echo "<script>location='inactive_rfq.php?status=1'</script>";
}
//activate an inactive Quote
if (isset($_GET['activate_quote'])) {
    $quote_id=$_GET['activate_quote'];
    $query = "UPDATE quotes SET quote_status='active' WHERE id = '$quote_id'";
    db::query($query);
    echo "<script>location='active_rfq.php?status=1'</script>";
}

//logout
if (isset($_GET['user_logout'])) {
    unset($_SESSION['ins_user_id']);
    echo "<script>location='../index.php'</script>";
}

//Update Data in Profile
if (isset($_POST['update_profile'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    if ($_FILES['picture']['name'] == "") {
        $query = "UPDATE users SET username='$username', email='$email', phone='$phone', company='$company' WHERE id = '$id'";
    } else {

        $file = rand(1000, 100000) . "-" . $_FILES['picture']['name'];
        $file_loc = $_FILES['picture']['tmp_name'];
        $file_size = $_FILES['picture']['size'];
        $file_type = $_FILES['picture']['type'];
        $folder = "images/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE users SET username='$username', email='$email', phone='$phone', company='$company', picture='$final_file' WHERE id = '$id'";
    }
    $res = db::query($query);
    echo "<script>location='user_profile.php?status=1'</script>";
}
//send msg
if (isset($_GET['submit_msg'])){
    $msg=$_POST['msg'];
    $quote_id=$_POST['quote_id'];
    $from_id=$id;
    $usertype=$_POST['usertype'];
    $sql = "INSERT INTO messages (quote_id, from_id, msg, usertype) VALUES ('$quote_id', '$from_id', '$msg', '$usertype')";
    $res=db::insertRecord($sql);
}

//load Chat
if (isset($_GET['load_chat'])){
    $quote_id=$_POST['quote_id'];
    $login_id= $id;
    $output="";
    $getchat="SELECT * FROM messages WHERE quote_id = '$quote_id'";
    $chats = db::getRecords($getchat);
    if(!$chats){
        $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
    }else{
        foreach($chats as $chat){
            $msg_sender_id=$chat['from_id'];
            if( $chat['usertype']=='user'){
                $getProfile="SELECT * FROM users WHERE id = $msg_sender_id";
                $getProfileData = db::getRecord($getProfile);
                // if($msg_sender_id==$id){
                    $output .= '<div class="main_message_wraper d-flex justify-content-end px-lg-5 px-1">
                                    <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                        <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                    </div>
                                </div>';
            } 
            elseif($chat['usertype']=='vendor'){
                $getProfile="SELECT * FROM vendors WHERE id = $msg_sender_id";
                $getProfileData = db::getRecord($getProfile);
                if($getProfileData['picture']){
                    $output .= '<div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                    <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                        <img src="../vender/images/'.$getProfileData['picture'].'">
                                    </div>
                                    <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                        <b><p class="m-0" style="margin-left: auto;">'.$getProfileData['username'].'</p></b>
                                        <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                    </div>
                                </div>';
                }else{
                    $output .= '<div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                    <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                        <img src="../vender/images/user-avatar-placeholder.png">
                                    </div>
                                    <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                        <b><p class="m-0" style="margin-left: auto;">'.$getProfileData['username'].'</p></b>
                                        <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                    </div>
                                </div>';
                }
            }else{
                $output .= '<div class="text">Error Loading the Chat</div>';
            }
            
        }
    }
    echo $output;
}

?>
