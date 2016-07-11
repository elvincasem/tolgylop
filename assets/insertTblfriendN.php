<?php

ob_start; // to allow headers
/*$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("polyglotdb", $con);
$userid = $_POST['uid'];
$sql="INSERT INTO tblpost (userid,pmessage) VALUES ('$userid','$_POST[comment]')";*/
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
header("Location: ../notifications/index.php");

}
ob_end_flush();
?>