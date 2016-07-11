<?php
ob_start();
include_once "dbconnect.php";

$conn = dbConnect();
session_start();
	
$account = $conn->prepare("Update tbluser Set email='$_POST[email]', password='$_POST[pass]', firstname='$_POST[fname]', lastname='$_POST[lname]', motto='$_POST[motto]', birthday='$_POST[bday]', language='$_POST[language]' WHERE email='" . $_SESSION["email"] . "'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

if(count($result)>1)
{echo "yes";
}else{
//echo "no";
header("Location: ../profile/index.php");

}
ob_end_flush();
?>

