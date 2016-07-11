<?php
echo $_POST['fuid'];
include_once "dbconnect.php";
$conn = dbConnect();
session_start();
$account = $conn->prepare("INSERT INTO tblfriendlist ( mainuserid, frienduserid, status) VALUES ('" . $_SESSION["userid"] ."', '$_POST[fuid]','$_POST[status]')");
$account->execute();
$account = $conn->prepare("INSERT INTO tblfriendlist ( mainuserid, frienduserid, status) VALUES ('" . $_SESSION["userid"] ."', '$_POST[fuid]','$_POST[status]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

if(count($result)>1)
{echo "yes";
}else{
echo "no";
//header("Location: ../home.php");

}





?>