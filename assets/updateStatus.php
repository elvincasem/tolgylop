<?php
ob_start(); 
include_once "dbconnect.php";

$conn = dbConnect();
session_start();
$follower=$_REQUEST['follower'];
$updateStat = $conn->prepare("Update tblfriendlist Set status='1' WHERE frienduserid = '".$_SESSION["userid"]."' AND mainuserid = '$follower'");
$updateStat->execute();
$account = $conn->prepare("INSERT INTO tblfriendlist ( mainuserid, frienduserid, status) VALUES ('" . $_SESSION["userid"] ."','$follower','1')");
$account->execute();
$account = $conn->prepare("INSERT INTO tblmessage ( mainmesid, friendmesid) VALUES ('" . $_SESSION["userid"] ."','$follower')");
$account->execute();
$account = $conn->prepare("INSERT INTO tblmessage ( friendmesid, mainmesid) VALUES ('" . $_SESSION["userid"] ."','$follower')");
$account->execute();

$result = $account->fetch(PDO::FETCH_ASSOC);
if(count($result)>1)
{echo "yes";
}else{
//echo "no";
header("Location: ../notifications/index.php");

}
ob_end_flush();
?>

