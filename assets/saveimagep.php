<?php
session_start();
ob_start();
include("dbconnect.php");
$conn = dbConnect();

 function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }


    
if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
    $target_path = "../img/".$imagename;
if(move_uploaded_file($temp_name, $target_path)) {
   //$query_upload="INSERT INTO images_tbl (images_path,submission_date) VALUES
  //$account = $conn->prepare("INSERT INTO tbluser (profileN) 
	//VALUES
  //('".$target_path."')");
    $account = $conn->prepare("Update tbluser Set profileP='".$imagename."' WHERE email='" . $_SESSION["email"] . "'");
   	$account->execute();
   	$result = $account->fetch(PDO::FETCH_ASSOC);
    header("Location: ../profile/index.php");
}else{
   exit("Error While uploading image on the server");
}
}
ob_end_flush();
?>
