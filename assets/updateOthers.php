<?php
session_start();
ob_start(); // to allow headers
include_once "dbconnect.php";
$conn = dbConnect();
$userid = $_POST['userid'];
$account = $conn->prepare("Update tbluser Set travel='$_POST[travel]', work='$_POST[work]', address='$_POST[address]', currentadd='$_POST[currentadd]' WHERE userid = '$userid'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

if(count($result)>1)
{echo "yes";
}else{

header("Location: ../profile/index.php");

}
ob_end_flush();
?>

