<?php
include_once "dbconnect.php";
$conn = dbConnect();
session_start();
$postid = $_GET['postid'];
$uid = $_SESSION['userid'];
$action = $_GET['action'];
//echo $action;
if($action=="Unlike"){
		$accounts = $conn->prepare("DELETE FROM tbllikes WHERE postid = '$postid' AND userid = '$uid'");
		$accounts->execute();
		$result = $accounts->fetch(PDO::FETCH_ASSOC);
		echo "Like";

}else{
		$accounts = $conn->prepare("INSERT INTO tbllikes (postid,userid) VALUES ('$postid','$uid')");
		$accounts->execute();
		$result = $accounts->fetch(PDO::FETCH_ASSOC);
		echo  "Unlike";
}


?>