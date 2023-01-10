<?php
require_once 'database_conn.php';
require_once 'constants.php';
error_reporting(0);

$regid= $_POST['regid'];

if($regid>0)
{
    $select = "SELECT * FROM btech_cse_cs WHERE regid='$regid'";
    $getuser = mysqli_query($conn,$select);
    if(mysqli_num_rows($getuser)==1)
    {
    while($row=mysqli_fetch_array($getuser))
    echo "logged in successfully";
    session_start();
    $_SESSION['regid']=$regid;
    header($dashboard);
    }
    else
    {
        echo"<script>alert('user not found');$go_back</script>";
    }
}else{
    echo"<script>alert('user not found');$go_back</script>";
}

?>