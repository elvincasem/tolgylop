<?php
session_start();
ob_start();
include_once "dbconnect.php";

$conn = dbConnect();
$postid = $_POST['pid'];
$userid = $_SESSION['userid'];
$muid = $_POST['mainuserid'];
$fuid = $_POST['frienduserid'];
$pmess = $_POST['pmessage'];
$account = $conn->prepare("DELETE FROM tblpost WHERE postid = '$postid' and userid = '$userid'");
$account->execute();
$account = $conn->prepare("DELETE FROM tbllikes WHERE postid = '$postid' and userid = '$userid'");
$account->execute();
$account = $conn->prepare("DELETE FROM tblcomment WHERE postid = '$postid' and userid = '$userid'");
$account->execute();
$account = $conn->prepare("DELETE FROM tblsavedpost WHERE postid = '$postid' and mainuserid = '$muid' and frienduserid = '$fuid' and pmessage = '$pmess'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

if (count($result)>2) {
    
} else {
    header("Location: ../profile/index.php");
}
/*if (!mysql_query($account,$conn))
  {
 die('Error: ' . mysql_error());
  }
 header("Location: ../main2.php");*/
 
//mysql_close($con)
 ob_end_flush();
?>

