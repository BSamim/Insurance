<?php
session_start();
$id = $_SESSION['id'];
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
