<?php
session_start();
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
    
    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "files/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "INSERT INTO Quotes (business_name, file, effective_date, gross_sales, business_type, city, state, insurance_type, description) VALUES ('$business_name', '$final_file', '$effective_date', '$gross_sales', '$business_type', '$city', '$state', '$insurance_type', '$description')";
    db::query($sql);
    echo "<script>location='active_rfq.php'</script>";
}

//Delete an active Quote
if (isset($_GET['del_active_quote'])) {
    $id = $_GET['del_active_quote'];

    $del_query = "DELETE FROM quotes WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='active_rfq.php?status=1'</script>";
}

//Delete an inactive Quote
if (isset($_GET['del_inactive_quote'])) {
    $id = $_GET['del_inactive_quote'];

    $del_query = "DELETE FROM quotes WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='inactive_rfq.php?status=1'</script>";
}