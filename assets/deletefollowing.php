<?php
session_start();
?>
<?php
ob_start();
include_once "dbconnect.php";
$conn = dbConnect();
$fid =$_POST['frienduid'];
$uid = $_SESSION['userid'];
$account = $conn->prepare("DELETE from tblfriendlist where mainuserid = '$fid' and frienduserid = '$uid' OR mainuserid = '$uid' and frienduserid = '$fid'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

$account = $conn->prepare("DELETE from tblmessage where mainmesid = '$fid' and friendmesid = '$uid' OR mainmesid = '$uid' and friendmesid = '$fid'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

//echo count($result);
		
		//print_r($result);
if(count($result)>1)
{echo "yes";
}else{
//echo "no";
//echo "INSERT INTO tblfriendlist ( mainuserid, frienduserid, status) VALUES ('" . $_SESSION["userid"] ."', '$_POST[fuid]','$_POST[status]')";
header("Location: ../profile/following.php");

}/*if (!mysql_query($account,$conn))
  {
 die('Error: ' . mysql_error());
  }
 header("Location: ../main2.php");*/
 
//mysql_close($con)



ob_end_flush();


?>