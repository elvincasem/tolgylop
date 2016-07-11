<?php
include_once "dbconnect.php";
$conn = dbConnect();
$userid = $_POST['uid'];
$chatid = $_POST['fid'];
echo $chatid;
echo $userid;
$account = $conn->prepare("INSERT INTO tblconvo (maincoid,friendcoid,conversation) VALUES ('$userid','$chatid','$_POST[convo]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

echo count($result);
		
		print_r($result);
if(count($result)>1)
{echo "yes";
}else{
echo "no";
//header("Location: ../home.php");

}/*if (!mysql_query($account,$conn))
  {
 die('Error: ' . mysql_error());
  }
 header("Location: ../main2.php");*/
 
//mysql_close($con)
?>

