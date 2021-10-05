<?php
session_start();
require_once("../database.php");
$db = db::open();

//Get a Quote
if (isset($_POST['get_quote'])) {
    $business_type = $_POST['business_type'];
    $effective_date = $_POST['effective_date'];
    $gross_sales = $_POST['gross_sales'];
    $required_date = $_POST['required_date'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $insurance_type = $_POST['insurance_type'];
    
    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "files/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "INSERT INTO Quotes (business_type, file, effective_date, gross_sales, required_date, city, state, insurance_type) VALUES ('$business_type', '$final_file', '$effective_date', '$gross_sales', '$required_date', '$city', '$state', '$insurance_type')";
    db::query($sql);
    echo "<script>location='active_rfq.php'</script>";
}
