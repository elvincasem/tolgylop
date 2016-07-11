
<?php 
	session_start();
	if(isset($_SESSION['email'])){
		
		//do nothing
	}
	else{
		header("Location: index.php");
	}
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo4.png">
    <script src="assets/js/jquery.min.js"></script>
    <script src = "bootstrap-3.3.5/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="animatemaster/animate.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    

    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'> -->
    <link href="assets/css/toolkit.css" rel="stylesheet">
    
    <link href="assets/css/application.css" rel="stylesheet">
    <head>
   
    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>