<?php
ob_start();
include_once "dbconnect.php";
$conn = dbConnect();
$userid = $_POST['uid'];
$account = $conn->prepare("INSERT INTO tblpost (userid,pmessage) VALUES ('$userid','$_POST[comment1]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);
if(count($result)>1)
{echo "yes";
}else{
//echo "no";
header("Location: ../home.php");
}
ob_end_flush();
?>

