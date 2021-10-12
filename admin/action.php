<?php
session_start();
// $admin = $_SESSION['email'];
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
                // all insertion code start
if(isset($_POST['login']))
{
    $email=$_POST['username'];
    $password=$_POST['password'];
    
    $query="SELECT * from admin where email='$email' && password='$password'";
    $rec=db::getRecord($query);
    
    if($rec!=NULL)
    {  
        
        $_SESSION['mn_admin']=$email;
        echo "<script>location='dashboard.php'</script>";
    }
    else
    {
       echo "<script>location='index.php?status=1'</script>";
    }
}
//update admin
if (isset($_POST['update'])) 
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    if($_FILES['doc_file']['name']=="")
    {
      $sql2 = "UPDATE admin SET name='$name',password='$password'";
      $r = db::query($sql2);
      echo "<script>location='profile.php?status=1'</script>";  
    }else
    {   
            $file = rand(1000,100000)."-".$_FILES['doc_file']['name'];
            $file_loc = $_FILES['doc_file']['tmp_name'];
            $file_size = $_FILES['doc_file']['size'];
            $file_type = $_FILES['doc_file']['type'];
            $folder ="uploads/";
            $new_file_name = strtolower($file);
            $final_file=str_replace(' ','-',$new_file_name);
            $a = move_uploaded_file($file_loc,$folder.$final_file);
            $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
            $r = db::query($sql2);
             echo "<script>location='profile.php?status=1'</script>";

    }
}

//logout
if(isset($_GET['logout']))
{
  unset($_SESSION['mn_admin']);
   echo "<script>location='index.php'</script>";
}

//delete_viewer
if(isset($_GET['delete_viewer']))
{
    $id = $_GET['delete_viewer'];

     $sql = "DELETE FROM user WHERE id='$id'";
    db::query($sql);
    echo "<script>location='viewers.php'</script>";
}


// add_banner
if (isset($_POST['add_banner'])) {
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO insurence (`heading`,`dcp`,`image`) VALUES ('$heading','$dcp','$final_file')";
    db::insertRecord($sql);
    echo "<script>location='insurense.php'</script>";
}

//update_banner
if (isset($_POST['update_banner'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE insurence SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE insurence SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='insurense.php?status=1'</script>";
}

//del_insurence
if (isset($_GET['del_insurence'])) {
    $id = $_GET['del_insurence'];

    $del_query = "DELETE FROM insurence WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='insurense.php?status=1'</script>";
}


// add_canadian
if (isset($_POST['add_canadian'])) {
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO canadian (`heading`,`dcp`,`image`) VALUES ('$heading','$dcp','$final_file')";
    db::insertRecord($sql);
    echo "<script>location='canadians.php'</script>";
}

//update_canadian
if (isset($_POST['update_canadian'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE canadian SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE canadian SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='canadians.php?status=1'</script>";
}

//del_canadian
if (isset($_GET['del_canadian'])) {
    $id = $_GET['del_canadian'];

    $del_query = "DELETE FROM canadian WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='canadians.php?status=1'</script>";
}



// add_insurance_quote
if (isset($_POST['add_insurance_quote'])) {
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO insurance_quote (`heading`,`dcp`,`image`) VALUES ('$heading','$dcp','$final_file')";
    db::insertRecord($sql);
    echo "<script>location='insurance_quote.php'</script>";
}

//update_insurance_quote
if (isset($_POST['update_insurance_quote'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE insurance_quote SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE insurance_quote SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='insurance_quote.php?status=1'</script>";
}

//del_insurance_quote
if (isset($_GET['del_insurance_quote'])) {
    $id = $_GET['del_insurance_quote'];

    $del_query = "DELETE FROM insurance_quote WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='insurance_quote.php?status=1'</script>";
}

//add category
if(isset($_POST['add_category'])){
    $name=$db->real_escape_string($_POST['name']);
 $query_insert="INSERT INTO categories (`name`) VALUES ('$name')";
 db::insertRecord($query_insert);
 echo "<script>location='categories.php'</script>";
}

//update category
if(isset($_POST['update_category'])){
    $name=$db->real_escape_string($_POST['name']);
    $id=$_POST['id'];
 $query_insert="UPDATE categories SET name='$name' WHERE id='$id'";

 db::query($query_insert);
 echo "<script>location='categories.php'</script>";
}

//delete category
if(isset($_GET['delete_category'])){
    $id=$_GET['delete_category'];
    $sql="DELETE FROM categories WHERE id='$id'";
    db::query($sql);
     echo "<script>location='categories.php'</script>";

}

// add_testemonail
if (isset($_POST['add_testemonail'])) {
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO testemonail (`heading`,`dcp`,`image`) VALUES ('$heading','$dcp','$final_file')";
    db::insertRecord($sql);
    echo "<script>location='testeminial.php'</script>";
}

//update_testemonail
if (isset($_POST['update_testemonail'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE testemonail SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE testemonail SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='testeminial.php?status=1'</script>";
}

//del_testemonail
if (isset($_GET['del_testemonail'])) {
    $id = $_GET['del_testemonail'];

    $del_query = "DELETE FROM testemonail WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='testeminial.php?status=1'</script>";
}

// add_brand
if (isset($_POST['add_brand'])) {

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO brand (`image`) VALUES ('$final_file')";
    db::insertRecord($sql);
    echo "<script>location='brand.php'</script>";
}

//update_brand
if (isset($_POST['update_brand'])) {
    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE brand SET  WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE brand SET image='$final_file' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='brand.php?status=1'</script>";
}

//del_brand
if (isset($_GET['del_brand'])) {
    $id = $_GET['del_brand'];

    $del_query = "DELETE FROM brand WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='brand.php?status=1'</script>";
}

// add_about
if (isset($_POST['add_about'])) {
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO about (`heading`,`dcp`) VALUES ('$heading','$dcp')";
    db::insertRecord($sql);
    echo "<script>location='about.php'</script>";
}

//update_about
if (isset($_POST['update_about'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE about SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE about SET heading='$heading',dcp='$dcp' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='about.php?status=1'</script>";
}

//del_about
if (isset($_GET['del_about'])) {
    $id = $_GET['del_about'];

    $del_query = "DELETE FROM about WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='about.php?status=1'</script>";
}

// add_post_quote
if (isset($_POST['add_post_quote'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO post_quote (`heading`,`dcp`) VALUES ('$heading','$dcp')";
    db::insertRecord($sql);
    echo "<script>location='post_quote.php'</script>";
}

//update_post_quote
if (isset($_POST['update_post_quote'])) {
    $id = $_POST['id'];
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE post_quote SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE post_quote SET heading='$heading',dcp='$dcp' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='post_quote.php?status=1'</script>";
}

//del_post_quote
if (isset($_GET['del_post_quote'])) {
    $id = $_GET['del_post_quote'];

    $del_query = "DELETE FROM post_quote WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='post_quote.php?status=1'</script>";
}

// add_get_job
if (isset($_POST['add_get_job'])) {
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO get_job (`heading`,`dcp`) VALUES ('$heading','$dcp')";
    db::insertRecord($sql);
    echo "<script>location='get_job.php'</script>";
}

//update_get_job
if (isset($_POST['update_get_job'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE get_job SET heading='$heading', dcp='$dcp' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE get_job SET heading='$heading',dcp='$dcp' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='get_job.php?status=1'</script>";
}

//del_get_job
if (isset($_GET['del_get_job'])) {
    $id = $_GET['del_get_job'];

    $del_query = "DELETE FROM get_job WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='get_job.php?status=1'</script>";
}

//del_contact
if (isset($_GET['del_contact'])) {
    $id = $_GET['del_contact'];

    $del_query = "DELETE FROM contact WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='contact.php?status=1'</script>";
}


// add_subscription
if (isset($_POST['add_subscription'])) {
    $heading = $_POST['heading'];
    $price = $_POST['price'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO subscription (`heading`,`dcp`,`image`, `price`) VALUES ('$heading','$dcp','$final_file', '$price')";
    db::insertRecord($sql);
    echo "<script>location='subscription.php'</script>";
}

//update_subscription
if (isset($_POST['update_subscription'])) {
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $dcp = $db->real_escape_string($_POST['dcp']);

    if ($_FILES['image']['name'] == "") {
        $query = "UPDATE subscription SET heading='$heading', dcp='$dcp', price='$price' WHERE id = '$id'";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);

        $query = "UPDATE subscription SET heading='$heading',dcp='$dcp',image='$final_file', price='$price' WHERE id = '$id'";
    }

    $res = db::query($query);

    echo "<script>location='subscription.php?status=1'</script>";
}

//del_subscription
if (isset($_GET['del_subscription'])) {
    $id = $_GET['del_subscription'];

    $del_query = "DELETE FROM subscription WHERE id='$id'";
    $res = db::query($del_query);

    echo "<script>location='subscription.php?status=1'</script>";
}
?>