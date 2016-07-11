
<?php
	session_start();
	



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
      <title>
      
        Home 
      
    </title>
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
<title>Polyglot</title>
	<body>
	<?php 
		if(isset($_SESSION['email'])){
		header("Location: home.php");
	}
	else{
		//do nothing;
	}
	?>
		<div class = "navbar navbar-default navbar-static-top navbar-inverse">
			<div class ="container">
			<div class = "nav-header">
			<span class="navbar-brand"><img src="img/logo4.png" width="45px" height="45px" style="margin-top:-12px;"></span>
			<span class="navbar-brand">Polyglot</span>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
				</button>
				
		
			<div class = "navbar-collapse collapse">
				<ul class ="nav navbar-nav navbar-right">
					<li class="text-right hvr-underline-from-left"><a href="index.php">Home</a></li>
					<li class="text-right hvr-underline-from-left"><a href="#">About Us</a></li>
					<li class="dropdown text-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language:<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="#">English</a></li>
						<li><a href="#">Arabic</a></li>
						<li><a href="#">Japanese</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
			</div>
			
				</div>
			 
		</div>

		<!--<div class= "animated fadeInUp">
		<div class="col-sm-24">
		<center><img src="img/logo4.png"  width="70px" height="70px" style="margin-top:-12px;"></center>
		</div>
		</div>-->
		<div class = "container">
		<br />
	<div class = "row">
		<div class="col-sm-4">
			
		</div>
		<div class="col-sm-4">
			<div id = "greet">
			<center>What's your Email Address</center><br>
			</div>
			<div class="col-lg-2">
			</div>
			
			
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
		<div class = "col-sm-4">
		</div>
		<div id = "cont" class="col-sm-4">
			
			<div class="col-lg-10">
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
				<form action = "checker.php" method ="post">

					<center>
					<input type="hidden" class="form-control "  id="key"  name="key" value= "<?php echo $key;?>" required>	
					<input type="text" class="form-control " placeholder=" Email or Phone" id="answer"  name="email" required><br>
					<button name="submit" id="submit" class="btn btn-danger button hvr-grow"  size="20px">Submit</button></center>
				</form>
			</div>
		</div>
			
		<!--<div class="navbar-footer">
		<div class="col-sm-4 col-md-12">
			<footer>
			<hr>
			<p>Contact information: <a href="mailto:someone@example.com">
			someone@example.com</a>.</p>
			</footer>
			</div>
		</div>
-->
		<!--<div class = "rows">
		<div class="col-sm-7">
		</div>
		<div class="col-sm-3">
			<a href = "#">Sign Up</a><br /><a href ="#">Forget Password?</a><br>
		</div>
		
		</div>-->
		
		
		
		
		
		
		<style>
body{
background-color:#FAFAFA;
background-image: url(img/wallpaper.png);
overflow: hidden;
}
/* navbar */


#greet{
			font-family: Roboto;
			font-size:30px;
			font-weight: bold;
			color: #FFFFFF;
			
			text-shadow: 2px 2px #0D0D0D;
}
#logo4{
margin-top:40px;

}
#cont{
	margin-left:30px;
}



	
		</style>
		
	</body>
</html>