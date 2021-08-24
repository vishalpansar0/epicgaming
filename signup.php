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

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {   
	if(empty($_POST['name']))
	{
		$_SESSION["ErrorMessage"]="Name is required";
		Redirect_to("signup.php");
	}
	else
	{
			$name=$_POST['name'];
	}
	   if(empty($_POST['userphone']))
	  {
		  $_SESSION["ErrorMessage"]="Mobile number is required";
		  Redirect_to("signup.php");
	  }
	  else
	  {
		  if(preg_match("/^[0-9ss ]*$/",$_POST['userphone']))
		  {
			  $userphone=$_POST['userphone'];
		  }
	      else
		  {
			  $_SESSION["ErrorMessage"]="No characters are allowed in phone number";
			  Redirect_to("signup.php");
		  }
	  }
	   if(empty($_POST['pubgname']))
	  {
		  $_SESSION["ErrorMessage"]="Pubg Name is required";
		  Redirect_to("signup.php");
	  }
	  else
	  {
			  $pubgname=$_POST['pubgname'];
	  }
	   if(empty($_POST['pubgid']))
	  {
		  $_SESSION["ErrorMessage"]="Pubg ID is required";
		  Redirect_to("signup.php");
	  }
	  else
	  {
			  $pubgid=$_POST['pubgid'];
	  }
	   if(empty($_POST['pass']))
	  {
		  $_SESSION["ErrorMessage"]="Password is required";
		  Redirect_to("signup.php");
	  }
	  else
	  {
			  $pass=$_POST['pass'];
	  }
	 if(empty($name&&$userphone&&$pubgname&&$pubgid&&$pass))
	  {
		  $_SESSION["ErrorMessage"]="Insert all fields";
		  Redirect_to("signup.php"); 
	  }
	  else{
		  $sql="INSERT INTO users(mobile_number,user_game_name,pubg_id,password,Name) VALUES(:phone,:pubgn,:pid,:pass,:n)";
		  $stmt=$connectingdb->prepare($sql);
		  $stmt->bindValue(':phone',$userphone);
		  $stmt->bindValue(':pubgn',$pubgname);
		  $stmt->bindValue(':pid',$pubgid);
		  $stmt->bindValue(':pass',$pass);
		  $stmt->bindValue(':n',$name);
		  $Execute=$stmt->execute();
		  $last_id = $connectingdb->lastInsertId();
		  
		  if($Execute){
        $User_t = 'user'.$last_id;
			  $user_sql = "CREATE TABLE $User_t(match_id int(2))";
			  $connectingdb->query($user_sql);
			  Redirect_to("index.php");
			  }
			  else{
				  $SESSION["ErrorMessage"]="Not Signed Up Succussfully";
			  Redirect_to("signup.php");
			  }
	  }
  }
?>
<!DOCTYP9E html>
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
        <label for="PhoneNumber">Your Name</label>
        <input type="text" class="form-control formInput" id="PhoneNumber" name="name" aria-describedby="phoneHelp" placeholder="Enter Name(Required)">
        
      </div>
	   <div class="form-group">
        <label for="PhoneNumber">Mobile Number</label>
        <input type="text" class="form-control formInput" id="PhoneNumber" name="userphone"aria-describedby="phoneHelp" placeholder="Enter Mobile Number(Required)">
       
		<small id="phoneHelp" class="form-text text-muted">Enter your PayTM mobile number.</small>
      </div>
	   <div class="form-group">
        <label for="PhoneNumber">Your pubg Name</label>
        <input type="text" class="form-control formInput" id="PhoneNumber" name="pubgname" aria-describedby="phoneHelp" placeholder="Enter Pubg Name(Required)">
        
		<small id="phoneHelp" class="form-text text-muted">Make sure its correctness.</small>
      </div>
	   <div class="form-group">
        <label for="PhoneNumber">Your pubg Id</label>
        <input type="text" class="form-control formInput" id="PhoneNumber" name="pubgid" aria-describedby="phoneHelp" placeholder="Enter PubG ID(Required)">
        
		<small id="phoneHelp" class="form-text text-muted">Id and Name shoud be matched.</small>
      </div>
  
      <div class="form-group">
        <label for="loginpassword">Password</label>
        <input type="password" class="form-control formInput" id="loginpassword" name="pass" placeholder="Password(Required)">
		 
      </div>

       <button type="submit" class="btn btn-success">Register</button>
	   
      </form>
	  <p>Already registered? <a href="login.php" style="font-weight:bold;color:#212D94;">Log In Now</a>
     </div>
 </div>












  <!--Footer Start-->
<div class="jumbotron jumbotron-fluid" style="background-color:#262a2b;">
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
