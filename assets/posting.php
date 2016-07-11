
 
<?php

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
$userid = $_POST['uid'];
$pmess = $_POST['comment'];
$postmessage = addslashes($pmess);
$account = $conn->prepare("INSERT INTO tblpost (userid,pmessage) VALUES ('$userid','$postmessage')");
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

