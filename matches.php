<?php require_once("php/connection.php"); ?>
<?php require_once("php/functions.php");  ?>
<?php require_once("php/sessions.php");   ?>
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

 <link href="users/css/custom-css.css" rel="stylesheet"/>
</head>
<body>
 <!--navbar start--->
 <nav class="navbar navbar-expand-lg col-xs-12" style="background-color:#212D94">
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
 
 <!--Main area-->
 
 <div class="jumbotron jumbotron-fluid" style="background-color:white">
      <div class="container app-stats">
      <h1 class="app-stats display-4 text-center" style="color:#3B365A ;font-family: 'Times New Roman', Times, serif;">Join Matches</h1>
	<br>
        <div class="row mb-4">
          
          <?php
                       global $connectingdb;
                       $count = 0;
                       $sql="SELECT * FROM pubgm_matches";
                       $stmt=$connectingdb->query($sql);
                       while($Datarows = $stmt->fetch())
                       {
                           $id          = $Datarows["id"];
                           $mName       = $Datarows["name"];
                           $date        = $Datarows["date"];
                           $time        = $Datarows["time"];
                           $map         = $Datarows["map"];
                           $mType       = $Datarows["type"];
                           $mView       = $Datarows["view"];
                           $entryFee    = $Datarows["entry_fee"];
                    ?>
                    <div class="col-sm-4">
            <div class="card" style="background-color: #fff; color: #000; box-shadow: 0 0 20px 0px #363d59;">
              <div class="card-body">
                  <div class="row">
                      <div class="col-6">
                         <h5 style="color:green">Match Id:<span style = "color:red"><?php echo  " #".$id; ?></span></h5>
                      </div>
                      <div class="col-6">
                         <h5 style="color:green">Map:<span style = "color:red"><?php echo  " ".$map;      ?></span></h5>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                         <h5 style="color:green">Type:<span style = "color:red"><?php echo  " ".$mType;      ?><span></h5>
                      </div>
                      <div class="col-6">
                         <h5 style="color:green">View:<span style = "color:red"><?php echo  " ".$mView;      ?><span></h5>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                         <h5 style="color:green">Date:<span style = "color:red"><?php echo  " ".$date;      ?><span></h5>
              
                      </div>
                      <div class="col-6">
                         <h5 style="color:green">Time:<span style = "color:red"><?php echo  " ".$time;      ?><span></h5>
              
                      </div>
                  </div>
                  <div class="row">
                      
                         <h5 style="color:green;margin-left:5%;"> Entry Fee:<span style = "color:red"><?php echo  " ".$entryFee;      ?><span></h5>
              
                      
                  </div>
                  
                  <div class="row">
                      <div class="col-9">
                       <div class="progress  mt-2">
                       <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90"
                           aria-valuemin="0" aria-valuemax="100" style="width:90%">
                           90% Complete
                       </div>
                       </div>
                     </div>
                      <div class="col-3">
                         <button class="btn btn-danger">Join</button>
                      </div>
                     
                  </div>
                 
              </div>
             
            </div>
            <br>
          </div>  
          
          <?php
           }
        
         ?>
</div>
<a href="https://localhost/epicgamingmobile/users/home.php" class="" >
        	     	<button type="button" class="btn btn-success logsignbtn col-lg-12 col-sm-12"><strong>
        	      		Home</strong>
        	    	</button>
          	</a>
            <br><br>.
</div>
        
     

 <!--Main area Ends-->

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