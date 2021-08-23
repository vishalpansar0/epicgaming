<?php require_once("php/connection.php"); ?>
<?php require_once("php/functions.php");  ?>
<?php require_once("php/sessions.php");   ?>
<?php
if(confirmLogin()){
  Redirect_to("users/home.php");
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
   <div class="navbar-header">
     <a href="#" class="nav-brand ml-2" style="font-weight:bold;color:white;text-decoration:none;"><h2>Epic Gaming</h2></a>
	  
		<button class="navbar-toggler collapsed  ml-auto" type="button" data-toggle="collapse" data-target="#searchResponsive" aria-controls="searchResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-search" aria-hidden="true"></i></span>		
		</button>
		 <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarresponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span ><i class="fas fa-bars" aria-hidden="true"></i></span>		
		</button>
		</div>
		<div class="navbar-collapse justify-content-md-center collapse" id="navbarresponsive">
         <ul class="navbar-nav">
		  <li class="nav-item">
		     <a  href="https://localhost/epicgaming/" class="nav-link active"  style="color:white"><strong>HOME</strong></a> 
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
         <input class="form-control" id="searchform" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-primary my-2 ml-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>
	 
	 </div>
 </nav>
 <!--navbar end-->
 
 
 <!--header bg-image-->

 <div class="jumbotron jumbotron-fluid mainbg" >
      <div class="container" >
       
	     <div class="row">
		   <div class="player2 col-lg-6 col-xs-12">
		     <h1 class="display-3 heading main-head text-center " style="font-family: 'Times New Roman', Times, serif;">Epic Gaming</h1>
			  
			  <p class="lead head-desc display-4 text-center" style="font-family: 'Times New Roman', Times, serif;" >An Epic eSports Platform</p>
			  <p class="lead text-center" style="color:#212D94; font-family: 'Times New Roman', Times, serif;" >Are you addicted to pubg mobile ? If Yes! Then what about earning money by just playing pubg mobile! Yep! You will be rewarded for WINNER WINNER CHIKEN DINNER and for each kill!</p>
		      <p class="lead text-center" style="color:#212D94;font-family: 'Times New Roman', Times, serif;">SIGN UP NOW!</p>
			   <a href="signup.php" class="">
        	     	<button type="button" class="btn btn-danger logsignbtn col-lg-12 col-sm-12"><strong>
        	      		SIGN UP NOW</strong>
        	    	</button>
          	</a>
			     	<br>
				<a href="login.php">
        	    	<button type="button" class="btn btn-primary logsignbtn col-lg-12 col-sm-12" style="cursor:pointer;"><strong>
        	      		LOG IN</strong>
        	    	</button>
          	</a>
				
		   </div> 
		   <div class="player col-lg-6 col-xs-12 text-center">
		   <img src="images/player.png" style="height:600px;">
		   </div>
		 </div>
     </div>
 </div>
 
 
   
 <!--header bg-image end-->
 
 
 
 
 <div class="jumbotron jumbotron-fluid" style="background-color:#212D94;">
  <div class="container app-stats">

    <h1 class="app-stats display-4 text-center" style="color: white;font-family: 'Times New Roman', Times, serif;">Excited features</h1>
	<br>
    <div class="row justify-content-center">
      <div class="col-sm-3">
        <div class="card" style="background-color: #FCFCFC; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <img style="max-height: 150px;" src="images/moneyreward.png">
            <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Win Money Rewards </h5><br />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="background-color: #fff; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <img style="max-height: 150px;" src="images/entry.png">
            <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Low Entry Fees</h5><br />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="background-color: #fff; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <img style="max-height: 150px;height:124px;" src="images/paytm.png">
            <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Easy Withdrawls direct into your PayTM Wallet</h5><br />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="background-color: #fff; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <img style="max-height: 150px;" src="images/free.png">
            <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Daily Free Matches</h5><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

 
 <div class="jumbotron jumbotron-fluid" id="cardfeature" style="background-color:white;">
  <div class="container app-stats">

    <h1 class="app-stats display-4 text-center" style="color: black;">Games To Be Added Soon</h1>
	<br>
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <div class="card" style="background-color: #FCFCFC; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <img style="max-height: 150px;" src="images/lite.png">
            <h5 class="card-title">Pubg Mobile Lite </h5><br />
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card" style="background-color: #fff; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <img style="max-height: 150px;" src="images/freefire.png">
            <h5 class="card-title">Garena Free Fire</h5><br />
          </div>
        </div>
      </div>
      
</div>  
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
	 <p class="lead display-5 text-center" style="color:white;font-weight:bold">&copy COPYRIGHT All Rights Reserved | Epic Gaming | 2020</p>
   </div>
</div>

  <!--Footer end-->



 
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>