<?php
    session_start();
    require_once("database.php");
    $db = db::open();
    $date = date("Y-m-d");

    // add_user
if(isset($_POST['add_acc']))
{
    $username=$_POST['name'];
    $email=$_POST['emailaddress-register'];
    $password=$_POST['password-register'];
    
    $encrypt_pass = md5($password);
    $uniqueid=rand(time(), 100000000);
    if($_POST['checktype']=='User'){
        $sql="INSERT INTO users (username, email, password, userid) VALUES ('$username', '$email', '$encrypt_pass', '$uniqueid')";
        db::query($sql);
        $_SESSION['unique_id'] = $result['userid'];
        
        echo "<script>location='user/index.php'</script>";
    }elseif($_POST['checktype']=='Vendor'){
        $sql="INSERT INTO vendors (username, email, password, vendorid) VALUES ('$username', '$email', '$encrypt_pass', '$uniqueid')";
        db::query($sql);
        $_SESSION['unique_id'] = $result['vendorid'];
        echo "<script>location='vender/index.php'</script>";
    }
}

  //Login
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($_POST['checktype']=='User'){
        $sql = "SELECT * FROM users WHERE email = '{$email}'";
        $row = db::getRecord($sql);
        if($sql){
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $_SESSION['unique_id'] = $row['userid'];
                echo "<script>location='user/index.php'</script>";
                
            }else{
                echo '<script>alert("Email or Password is Incorrect!")</script>';
                echo "<script>location='index.php?status=1'</script>";
            }
        }else{
            echo '<script>alert("$email - This email does not Exist!")</script>';
            echo "<script>location='index.php?status=1'</script>";
        }
    }elseif($_POST['checktype']=='Vendor'){
        $sql = "SELECT * FROM vendors WHERE email = '{$email}'";
        $row = db::getRecord($sql);
        if($sql){
            $vendor_pass = md5($password);
            $enc_pass = $row['password'];
            if($vendor_pass === $enc_pass){
                $_SESSION['unique_id'] = $row['vendorid'];
                echo "<script>location='vender/index.php'</script>";
                
            }else{
                echo '<script>alert("Email or Password is Incorrect!")</script>';
                echo "<script>location='index.php?status=1'</script>";
            }
        }else{
            echo '<script>alert("$email - This email does not Exist!")</script>';
            echo "<script>location='index.php?status=1'</script>";
        }
    }

}
?>