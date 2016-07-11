<?php

ob_start();
include_once "dbconnect.php";
$conn = dbConnect();
session_start();
$account = $conn->prepare("INSERT INTO tblfriendlist ( mainuserid, frienduserid, status) VALUES ('" . $_SESSION["userid"] ."', '$_POST[frienduid]','$_POST[status]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

echo count($result);
		
		print_r($result);
if(count($result)>1)
{echo "yes";
}else{
echo "no";
header("Location: ../profile2.php");

}
ob_end_flush();
?>