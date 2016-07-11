<?php
session_start();
ob_start();
include_once "dbconnect.php";

$conn = dbConnect();
$pid = $_POST['pid'];
$muid = $_POST['mainuserid'];
$fuid = $_POST['frienduserid'];
$pmess = $_POST['pmessage'];
$account = $conn->prepare("DELETE FROM tblsavedpost WHERE postid = '$pid' and mainuserid = '$muid' and frienduserid = '$fuid' and pmessage = '$pmess'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

if (count($result)>2) {
    
} else {
    header("Location: ../home.php");
}
/*if (!mysql_query($account,$conn))
  {
 die('Error: ' . mysql_error());
  }
 header("Location: ../main2.php");*/
 
//mysql_close($con)
 ob_end_flush();
?>
