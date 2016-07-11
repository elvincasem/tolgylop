<?php
session_start();
?>
<?php
ob_start();
include_once "dbconnect.php";
$conn = dbConnect();
$uid = $_SESSION['userid'];
$fuid = $_POST['fuid'];
$stat = 0;
$account = $conn->prepare("INSERT INTO tblfriendlist (mainuserid, frienduserid, status) VALUES ('$uid','$fuid','$stat')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);
//echo "INSERT INTO tblfriendlist (mainuserid, frienduserid, status) VALUES ('$uid','$fuid','$stat')";
if(count($result)>1)
{echo "yes";
}else{
//echo "no";
header("Location: ../home.php");

}

ob_end_flush();
?>