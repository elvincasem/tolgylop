<?php
session_start();
?>
<?php
					function generateRandomString($length = 10) {
    				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    				$charactersLength = strlen($characters);
    				$randomString = '';
    				for ($i = 0; $i < $length; $i++) {
       					 $randomString .= $characters[rand(0, $charactersLength - 1)];
   						 }
    					return $randomString;
						}
							$key = generateRandomString();
					?>
<?php
ob_start();
include 'dbconnect.php';
$conn = dbConnect();
$account = $conn->prepare("INSERT INTO tbluser (email, password, firstname, lastname, keygen, birthday, gender, language)
VALUES
('$_POST[email]','$_POST[pass]','$_POST[fname]','$_POST[lname]','$key','$_POST[bday]','$_POST[gender]','$_POST[language]')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

 if(count($result)>=1){

 header("Location: ../signupcheck.php");
 }else{
 header("Location: ../cannotprocess.php");
 }
ob_end_flush();
?>
