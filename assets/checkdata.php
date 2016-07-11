<?php
session_start();
include "dbconnect.php";
$conn = dbConnect();

if(isset($_GET['user_name']))
{
	$name=$_GET['user_name'];

		
		$account = $conn->prepare("SELECT count(*) as usercount FROM tbluser where email = '$name'");
		$account->execute();
		$result = $account->fetch(PDO::FETCH_ASSOC);
		//print_r($result);

	if($result['usercount']>0)
	{
	echo "<div class='alert alert-danger'>";
	echo "User Name Already Exist";
	echo "</div>";
	}
	else
	{
	echo "<div class='alert alert-success'>";
	echo "OK";
	echo "</div>";
	}
exit();
}

if(isset($_GET['user_email']))
{
	$emailId=$_GET['user_email'];

	$account = $conn->prepare("SELECT * FROM tbluser where password = '$emailID'");
	$account->execute();
	$result = $account->fetch(PDO::FETCH_ASSOC);

	if(mysql_num_rows($query)>0)
	{
	echo "Email Already Exist";
	}
	else
	{
	echo "OK";
	}
exit();
}
?>