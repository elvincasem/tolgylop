 <?php
include_once "dbconnect.php";
$conn = dbConnect();
$userid = $_POST['uid'];
$puid = $_POST['puid'];
$account = $conn->prepare("INSERT INTO tblcomment (postid,userid,comments) VALUES ('$puid','$userid','$_POST[comments]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

echo count($result);
		
		print_r($result);
if(count($result)>1)
{echo "yes";
}else{
echo "no";
}
?>

