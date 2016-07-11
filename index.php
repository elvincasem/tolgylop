
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
					<li class="text-right hvr-underline-from-left"><a href="#">Home</a></li>
					<li class="text-right hvr-underline-from-left"><a href="#">About Us</a></li>
			
					
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
		<div class="col-sm-1">
<video width="320" height="240" autoplay loop>
  <source src="video1.mp4" type="video/mp4">
  
  Your browser does not support the video tag.
</video>
			
		</div>
		<div class="col-sm-4">
			<div id = "greet">
			<center>Welcome to Polyglot</center>
			</div>
			<div class="col-lg-2">
			</div>
			<div class = "navbar-collapse collapse">
			<div class="col-xs-7" id = "logo4">	
				<center>
				<img src="img/logo4.png"  width="250px" height="250px" class=" animated fadeInLeft">
				</center>
			</div>
			</div>
			
		</div>
		<div class="col-sm-2">
			
		</div>
		<div id = "cont" class="col-sm-4">
			<center>
			<div class="col-lg-10">
		
			
			<form action = "assets/verify.php" method ="post">
			<input type="text" class="form-control " placeholder=" Email or Phone" id="answer"  name="email" required><br>
			<input type="password" class="form-control" placeholder="Password" id="answer"  name="password" required><br>
			</center>
			<div id = "cont" class="col-sm-10">
			&nbsp <a href ="forget.php">Forget Password?</a>
			&nbsp &nbsp <button name="submit" id="submit" class="btn btn-danger button hvr-grow"  size="20px">Submit</button>
			</form>
			<div id = "cont" class="col-sm-16">
			<h4>New to Polyglot?</h4>
			<div class="container">
					<!-- Trigger the modal with a button -->
						<a href="#"  data-toggle= "modal" data-target="#myModals"><h4 style="margin-left:-15px;">Sign Up</h4></a>
							<!-- Modal -->
								<div class="modal fade" id="myModals" role="dialog">
									<div class="modal-dialog">
										<!-- Modal content-->
										<div class="modal-content col-lg-10">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" data-target="#myModal">&times;</button>
													<h4 class="modal-title">Sign Up</h4>
												</div>
												<div class="modal-body">
<script>
function checkname()
    {
	

	   var name=document.getElementById( "email" ).value;
	
	  //alert(name);
	   
	   if(name)
	   {
	        $.ajax({
			   type: 'get',
			   url: 'assets/checkdata.php',
			   data: {
			   user_name:name,
			   },
			   success: function (response) {
			   $(' #name_status').html(response);
  		          if(response=="OK")	
                  {
                     return true;	
                  }
                  else
                  {
                     return false;	
                  }
                }
		      });
	
	   }
	   else
	   {
		   $(' #name_status').html("");
		   return false;
	   } 
	}
/*
    function checkemail()
    {
	
	   var email=document.getElementById( "pass" ).value;
	
	   if(email)
	   {
	       $.ajax({
			   type: 'post',
			   url: 'assets/checkdata.php',
			   data: {
			   user_email:email,
			   },
			   success: function (response) {
			   $( '#email_status' ).html(response);
		       if(response=="OK")	
               {
                  return true;	
               }
               else
               {
                  return false;	
               }
             }
		   });


	    }
	    else
	    {
		   $(' #email_status').html("");
		   return false;
	    }
	
	}*/




</script>
													<form action="assets/insert.php" method="post">
													<input type="text" class="form-control"  placeholder="Email" id="email"  name="email" onkeyup="checkname()" required><br />	
													<div id="name_status"></div>
													<script type="text/javascript"><!--
															function checkPasswordMatch() {
    															var password = $("#txtNewPassword").val();
    															var confirmPassword = $("#txtConfirmPassword").val();

   																 if (password != confirmPassword)
       																	$("#divCheckPasswordMatch").html("Passwords do not match!")
   																 else
      																	$("#divCheckPasswordMatch").html("Passwords match.");
																	}
												//--></script>
													<input type="password" class="form-control"  placeholder="Password" id="txtNewPassword"  name="pass"  required><br />
												
													<input type="password" class="form-control"  placeholder="Re-enter Password" id="txtConfirmPassword"  name="rpass" onkeyup="checkPasswordMatch();" required><br />
													<div class="registrationFormAlert" id="divCheckPasswordMatch">
													</div>
													<input type="text" class="form-control"  placeholder="First name" id="answer"  name="fname" style="text-transform: capitalize;" required><br />
													<input type="text" class="form-control"  placeholder="Last name" id="answer"  name="lname" style="text-transform: capitalize;" required><br />
													Birthday
															<input type="date" class="form-control" name="bday">
															<br />
													Gender:
														<input type="radio" name="gender"
														<?php if (isset($gender) && $gender=="female") echo "checked";?>
														value="female">Female
														<input type="radio" name="gender"
														<?php if (isset($gender) && $gender=="male") echo "checked";?>
														value="male" >Male<br />
												
														<label class="text-right">Language:</label>
														<select name = "language">
															<option value="English">English</option>
															<option value="Filipino">Filipino</option>
															<option value="Spanish">Spanish</option>
															<option value="Japanese">Japanese</option>
															<option value="Japanese">Arabic</option>
															<option value="Japanese">Persian</option>
															<option value="Japanese">Turkish</option>
															<option value="Japanese">Kurdish</option>
														</select>
														
															
													
												
										
												</div>
												<div class="modal-footer">
															<button type="submit" name="register" class="btn btn-danger" onclick="countScore1()" data-target="#myModal">Submit</button>
													
													<div class="col-sm-10">
													</div>
													</form>
			
												</div>
										</div>
									</div>
								</div>
			</div>
			</div>
			</div>
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
	font-family: Arial;
			font-size:30px;
			font-weight: bold;
			color: #FFFFFF;
			
			text-shadow: 2px 2px #0D0D0D;
}
#logo4{
margin-top:40px;

}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}



	
		</style>
		
	</body>
</html>