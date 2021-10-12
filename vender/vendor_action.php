<?php
session_start();
$id = $_SESSION['ins_vendor_id'];
require_once("../database.php");
$db = db::open();

//logout
if (isset($_GET['vendor_logout'])) {
    unset($_SESSION['ins_vendor_id']);
    echo "<script>location='../index.php'</script>";
}

//Update Data in Profile
if (isset($_POST['update_profile'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    if ($_FILES['picture']['name'] == "") {
        $query = "UPDATE vendors SET username='$username', email='$email', phone='$phone', company='$company' WHERE id = '$id'";
    } else {

        $file = rand(1000, 100000) . "-" . $_FILES['picture']['name'];
        $file_loc = $_FILES['picture']['tmp_name'];
        $file_size = $_FILES['picture']['size'];
        $file_type = $_FILES['picture']['type'];
        $folder = "images/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE vendors SET username='$username', email='$email', phone='$phone', company='$company', picture='$final_file' WHERE id = '$id'";
    }
    $res = db::query($query);
    echo "<script>location='vendor_profile.php?status=1'</script>";
}

//Show Interest in quote
if (isset($_GET['interested_quote'])) {
    $quote_id=$_GET['interested_quote'];
    $v=$_GET['vendor'];
    $u=$_GET['userid'];
    $sql = "INSERT INTO interested_quotes (quote_id, vendor_id, user_id) VALUES ('$quote_id', '$v', '$u')";
    db::query($sql);
    
    echo "<script>location='post_forum.php?status=1'</script>";
}

//Remove Interest in quote
if (isset($_GET['remove_interested_quote'])) {
    $Interested_quote_id=$_GET['remove_interested_quote'];
    $v=$_GET['vendor'];
    $sql = "DELETE FROM interested_quotes WHERE quote_id = '$Interested_quote_id' && vendor_id='$v'";
    echo $sql;
    db::query($sql);
    
    echo "<script>location='post_forum.php?status=1'</script>";
}

//Remove Interest in quote
if (isset($_GET['remove_interested_quote_liked'])) {
    $Interested_quote_id=$_GET['remove_interested_quote_liked'];
    $v=$_GET['vendor'];
    $sql = "DELETE FROM interested_quotes WHERE quote_id = '$Interested_quote_id' && vendor_id='$v'";
    echo $sql;
    db::query($sql);
    
    echo "<script>location='intrested_posts.php?status=1'</script>";
}
//Save Chat Message
if (isset($_GET['submit_msg'])){
    $msg=$_POST['msg'];
    $quote_id=$_POST['quote_id'];
    $from_id=$id;
    $usertype=$_POST['usertype'];
    $sql = "INSERT INTO messages (quote_id, from_id, msg, usertype) VALUES ('$quote_id', '$from_id', '$msg', '$usertype')";
    $res=db::insertRecord($sql);
}
//Load Chat
if (isset($_GET['load_chat'])){
    $quote_id=$_POST['quote_id'];
    $login_id= $id;
    $output="";
    $getchat=" SELECT * FROM messages WHERE quote_id = $quote_id";
    $chats = db::getRecords($getchat);
    if(!$chats){
        $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
    }else{
        foreach($chats as $chat){
            $msg_sender_id=$chat['from_id'];
            if( $chat['usertype']=='vendor'){
                $getProfile="SELECT * FROM vendors WHERE id = $msg_sender_id";
                $getProfileData = db::getRecord($getProfile);
                if($msg_sender_id==$login_id){
                    $output .= '<div class="main_message_wraper d-flex justify-content-end px-lg-5 px-1">
                                    <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                        <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                    </div>
                                </div>';
                }else{
                    if($getProfileData['picture']){
                        $output .= '<div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                        <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                            <img src="images/'.$getProfileData['picture'].'">
                                        </div>
                                        <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                            <b><p class="m-0" style="margin-left: auto;">'.$getProfileData['username'].'</p></b>
                                            <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                        </div>
                                    </div>';
                    }else{
                        $output .= '<div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                        <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                            <img src="images/user-avatar-placeholder.png">
                                        </div>
                                        <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                            <b><p class="m-0" style="margin-left: auto;">'.$getProfileData['username'].'</p></b>
                                            <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                        </div>
                                    </div>';
                    }

                }
            }elseif($chat['usertype']=='user'){
                $getProfile="SELECT * FROM users WHERE id = $msg_sender_id";
                $getProfileData = db::getRecord($getProfile);
                if($getProfileData['picture']){
                    $output .= '<div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                    <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                        <img src="../user/images/'.$getProfileData['picture'].'">
                                    </div>
                                    <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                        <b><p class="m-0" style="margin-left: auto;">'.$getProfileData['username'].' (User)</p></b>
                                        <p class="m-0" style="margin-left: auto;">'.$chat['msg'].'</p>
                                    </div>
                                </div>';
                }else{
                    $output .= '<div class="main_message_wraper d-flex px-lg-5 px-1 mb-5">
                                    <div class="message_img_wraper user-avatar status-online me-3 shadow">
                                        <img src="images/user-avatar-placeholder.png">
                                    </div>
                                    <div class="meassage_text_wraper  ps-lg-4 ps-2 pe-lg-2 pe-1 py-lg-3 py-2">
                                        <b><p class="m-0" style="margin-left: auto;">'.$getProfileData['username'].' (User)</p></b>
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