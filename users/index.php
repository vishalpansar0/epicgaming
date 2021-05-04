<?php require_once("../php/connection.php"); ?>
<?php require_once("../php/functions.php");  ?>
<?php require_once("../php/sessions.php");   ?>
<?php

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
 <nav class="navbar navbar-expand-lg fixed-top col-xs-12" style="background-color:#212D94">
   <div class="container">
     <a href="#" class="nav-brand ml-2" style="font-weight:bold;color:white;text-decoration:none;"><h2>Epic Gaming</h2></a>
	  
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
         <input class="form-control" id="searchform" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-primary my-2 ml-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>
	 
	 </div>
 </nav>
 <!--navbar end-->
 


<div class="container user-area mb-4">
   <div class="row mb-4">
      <div class="col-sm-4">
       <div class="card mb-2" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
              <div class="row">
                  <div class="col-xs-4 text-center">
                   <div class="name-logo">
                      <h1>V</h1>    
                      </div>
                  </div>
           <div class="col-xs-8"> <h3 class="card-title text-center mt-5 ml-5" style="font-family: 'Times New Roman', Times, san-serif;font-weight:bold;color:red">Vishal Sharma</h3><br/>
              </div>
              </div>  
        </div>
        </div>
      </div>
      <div class="col-sm-8">
    <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
            <div class="row text-muted">
              <div class="col-sm-4 user_stats">
                  <h1 style="color:green;">4500</h1>
                <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Winning</h5><br/>
              </div>
                <div class="col-sm-4 user_stats">
                <h1 style="color:red;">34</h1>
                <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Matches Played </h5><br/>
              </div>
                <div class="col-sm-4 user_stats">
                <h1 style="color:blue;">3700</h1>
                <h5 class="card-title" style="font-family: 'Times New Roman', Times, serif;">Wallet</h5><br/>
              </div>
              </div>
          </div>
     </div>
          
          
          
    </div>
  </div>

    <div class="row">
      <div class="col-sm-3">
         <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
       <div class="card-body text-center">
           <img src="images/main.jpg" style="max-width:116.5px;max-height:116.5px;">
           <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue;">My Profile</h5><br/>
         </div>
          </div>
      </div>
     <div class="col-sm-3">
       <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
        <div class="card-body text-center">
           <img src="images/profile2.png" style="max-width:116.5px;max-height:116.5px;">
            <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue">My Wallet</h5><br/>
         </div>
        </div>
        
      </div>
        <div class="col-sm-3">
       <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
         <div class="card-body text-center">
          <img src="images/main.jpg" style="max-width:116.5px;max-height:116.5px;">
         <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue">Join Matches</h5><br/>
           </div>
         </div>
      </div>
        <div class="col-sm-3">
        <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
           <img src="images/main.jpg" style="max-width:116.5px;max-height:116.5px;">
           <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue">Top Players</h5><br/>
          </div>
         </div>
      </div>
    
    
    </div>
    
    <div class="row mt-4">
      <div class="col-sm-3">
         <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
       <div class="card-body text-center">
           <img src="images/main.jpg" style="max-width:116.5px;max-height:116.5px;">
           <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue;">About Us</h5><br/>
         </div>
          </div>
      </div>
     <div class="col-sm-3">
       <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
        <div class="card-body text-center">
           <img src="images/profile2.png" style="max-width:116.5px;max-height:116.5px;">
            <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue">Game Rules</h5><br/>
         </div>
        </div>
        
      </div>
        <div class="col-sm-3">
       <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
         <div class="card-body text-center">
          <img src="images/main.jpg" style="max-width:116.5px;max-height:116.5px;">
         <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue">Youtube Channel</h5><br/>
           </div>
         </div>
      </div>
        <div class="col-sm-3">
        <div class="card" style="background-color: white; color: #000; box-shadow: 0 0 20px 0px #363d59;">
          <div class="card-body text-center">
           <img src="images/main.jpg" style="max-width:116.5px;max-height:116.5px;">
           <a href="logout.php">
           <h5 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif;color:blue">Log Out</h5><br/>
          </a>
          </div>
         </div>
      </div>
    
    
    </div>
    
    
    
</div> 
 
 
   

 
 
 
 
 

<!--Footer Start-->
<div class="jumbotron jumbotron-fluid"style="background-color:#262a2b;">
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