<?php
include('./connect.php');
error_reporting(0);
session_start();
// echo "Welcome ".$_SESSION['user_name'];
$userprofile = $_SESSION['user_name'];

if($userprofile == true){

}else{
    header('location:Login.php');
}


$Requester_ID = $_GET['Requester_ID'];
$query = "DELETE FROM bloodrequester WHERE Requester_ID = '$Requester_ID'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Record Deleted')</script>";
    echo "<script>window.location.assign('RequesterRecords.php')</script>";
  } else {
    "<script>alert('Record Not Deleted')</script>";
  }


?>