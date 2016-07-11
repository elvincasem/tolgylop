<?php
ob_start();
include 'dbconnect.php';
$conn = dbConnect();
$account = $conn->prepare("INSERT INTO tblsavedpost (postid,mainuserid,frienduserid,pmessage)
VALUES
('$_POST[pid]','$_POST[mainuserid]','$_POST[frienduserid]','$_POST[pmessage]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

 if(count($result)>=1){

 header("Location: ../profile/index.php");
 }else{
 echo 'no';
 }
ob_end_flush();
?>