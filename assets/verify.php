<?php
//account login
	ob_start(); // to allow headers
	session_start();
	
		$email = $_POST['email'];
		$password = $_POST['password'];

	if($email&&$password)
		{
		include "dbconnect.php";
		$conn = dbConnect();
		$account = $conn->prepare("SELECT * FROM tbluser where email='$email' AND password='$password'");
		$account->execute();
		$result = $account->fetch(PDO::FETCH_ASSOC);
		
		//echo count($result);
		
		//print_r($result);
		
		if(count($result)>1){
			//echo "yes";
			$_SESSION['email'] = $email;
			$_SESSION['userid'] = $result['userid'];
			header("Location: ../home.php");//if correct will go to the main page
		}else{
			//echo "no";
			//die("That user doesn't exists!");*/
			header("Location: ../index.php");// esle if error go to the login page
		}
		
	}
	else
		die("Please enter a username and password!");
ob_end_flush();
?>
