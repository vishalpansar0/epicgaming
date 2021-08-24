<?php require_once("php/connection.php"); ?>
<?php require_once("php/functions.php");  ?>
<?php require_once("php/sessions.php");   ?>
<?php 
   $C = confirmLogin();
   if($C){
	   Redirect_to("users/home.php");
   }
   else{
	   
   }
 ?>
<?php   
    if(isset($_POST['submit'])){
		$mobile = $_POST["mobile"];
		$pass = $_POST["password"];
		
		if(empty($mobile) || empty($pass)){
			$_SESSION["ErrorMessage"]="Mobile number & password is required";
		    Redirect_to("login.php");
		}
		else{
			$isFound = Login($mobile,$pass);
			if($isFound){
				$_SESSION["UserId"] = $isFound["user_id"];
				$_SESSION["Name"] = $isFound["Name"];
				$_SESSION["MobileNumber"] = $isFound["mobile_number"];
			
			    Redirect_to("users/home.php");
			} 
			else{
				$_SESSION["ErrorMessage"]="Invalid Number Or Password";
		    Redirect_to("login.php");
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Epic Gaming</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://kit.fontawesome.com/74ae24f2bf.js" crossorigin="anonymous"></script>

 <link href="css/custom-css.css" rel="stylesheet"/>
</head>
<body>
 <!--navbar start--->
<nav class="navbar navbar-expand-lg col-xs-12" style="background-color:#212D94">
   <div class="container">
     <a href="#" class="nav-brand" style="font-weight:bold;color:white;text-decoration:none;"><h2>Epic Gaming</h2></a>
	   <button class="navbar-toggler collapsed  ml-auto" type="button" data-toggle="collapse" data-target="#searchResponsive" aria-controls="searchResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-search" aria-hidden="true"></i></span>		
		</button>
		 <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarresponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span ><i class="fas fa-bars" aria-hidden="true"></i></span>		
		</button>
		<div class="navbar-collapse justify-content-md-center collapse" id="navbarresponsive">
         <ul class="navbar-nav">
		  <li class="nav-item">
		     <a  href="https://localhost/epicgamingmobile/" class="nav-link active"  style="color:white"><strong>HOME</strong></a> 
		  </li>
		  <li class="nav-item">
		     <a  href="aboutus.php" class="nav-link"style="color:white"><strong>ABOUT US</strong></a>
		  </li>
		  <li class="nav-item">
		     <a  href="howtoplay.php" class="nav-link" style="color:white"><strong>HOW TO PLAY</strong></a>
		  </li>
		  <li class="nav-item">
		     <a  href="rules.php" class="nav-link" style="color:white"><strong>RULES</strong></a>
		  </li>
		  <li class="nav-item">
		     <a  href="support.php" class="nav-link"style="color:white"><strong>SUPPORT</strong></a>
		  </li>
		  </ul>
     </div>
	 <div class="navbar-collapse justify-content-md-center collapse" id="searchResponsive">
		  <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" id="searchform" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 ml-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>
	 </div>
 </nav>
 <!--navbar end-->
   
   
   
   
    <div class="jumbotron jumbotron-fluid mainbg" >
      <div class="container" >

	  <?php
	    echo ErrorMessage();
		echo SuccessMessage();
	  
	  ?>

       <form method="POST">
       <div class="form-group">
        <label for="PhoneNumber">Mobile Number</label>
        <input type="text" class="form-control formInput" name = "mobile" id="PhoneNumber" aria-describedby="phoneHelp" placeholder="Enter Mobile Number">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
      </div>
  
      <div class="form-group">
        <label for="loginpassword">Password</label>
        <input type="password" class="form-control formInput" name = "password" id="loginpassword" placeholder="Enter Password">
      </div>

       <button type="submit" name ="submit" class="btn btn-success mb-1">Log In</button>
      </form>
	  <p>Have'nt Registered yet? <a href="signup.php" style="font-weight:bold;color:#212D94;">Sign Up Now</a>
     </div>
 </div>












  <!--Footer Start-->
<div class="jumbotron jumbotron-fluid"  style="background-color:#262a2b;">
  <div class="container">
  <div class="row">
    <div class="col-sm-3 social-footer">
	  <p class="lead display-5 text-center" style="color:white;font-weight:bold">CONNECT WITH US</p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Facebook</a></p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Whatsapp</a></p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Mail:contact@epicgaming.com</a></p>
	
	    
	  
	  
	            
	</div>
	<div class="col-sm-3 about-footer">
	<p class="lead display-5 text-center" style="color:white;font-weight:bold">ABOUT</p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">About Us</a></p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Terms & Conditions</a></p>
	
	</div>
	<div class="col-sm-3 policy-footer">
	<p class="lead display-5 text-center" style="color:white;font-weight:bold">OUR POLICY</p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Rules</a></p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Fair Play Policy</a></p>
	<p class="lead display-5 text-center"><a href=""  style="color:#a9a69f;font-weight:bold">Refund & Cancelletion</a></p>
	</div>
	<div class="col-sm-3 info-footer">
	<p class="lead display-5 text-center" style="color:white;font-weight:bold">INFORMATION</p>
	<p class="lead display-5 text-center" style="color:#a9a69f;font-weight:bold">Epic Gaming is an ultimate esports platform where you can play in PUBG's custom rooms and you can earn money by playing in these rooms.</p>
	</div>
     </div>
	 <p class="lead display-5 text-center" style="color:white;font-weight:bold">&copy COPYRIGHT 2020 | All Rights Reserved | Epic Gaming</p>
   </div>
</div>

  <!--Footer end-->



 
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
