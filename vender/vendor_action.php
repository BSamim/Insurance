<?php
session_start();
$id = $_SESSION['id'];
require_once("../database.php");
$db = db::open();

//logout
if (isset($_GET['vendor_logout'])) {
    unset($_SESSION['id']);
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
    $sql = "INSERT INTO interested_quotes (quote_id, vendor_id) VALUES ('$quote_id', '$v')";
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

?>