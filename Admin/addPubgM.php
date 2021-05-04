<?php require_once("../php/connection.php"); ?>
<?php require_once("../php/functions.php");  ?>
<?php require_once("../php/sessions.php");   ?>
<?php
if(isset($_POST['submit']))
  {   
	  if(empty($_POST['Name']))
	  {
		  $_SESSION["ErrorMessage"]="Name is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameName=$_POST['Name'];
	  }
       if(empty($_POST['Date']))
	  {
		  $_SESSION["ErrorMessage"]="Date is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameDate=$_POST['Date'];
	  }
       if(empty($_POST['Time']))
	  {
		  $_SESSION["ErrorMessage"]="Time is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameTime=$_POST['Time'];
	  }
	   if(empty($_POST['map']))
	  {
		  $_SESSION["ErrorMessage"]="Map is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameMap=$_POST['map'];
		
      }
	   if(empty($_POST['type']))
	  {
		  $_SESSION["ErrorMessage"]="Type is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameType=$_POST['type'];
	  }
	   if(empty($_POST['view']))
	  {
		  $_SESSION["ErrorMessage"]="View is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameView=$_POST['view'];
	  }
	   if(empty($_POST['entry']))
	  {
		  $_SESSION["ErrorMessage"]="Entry Fee is required";
		  Redirect_to("addPubgM.php");
	  }
	  else
	  {
			  $GameEntry=$_POST['entry'];
	  }
	 if(empty($GameName&&$GameEntry))
	  {
		  $_SESSION["ErrorMessage"]="Insert all fields";
		  Redirect_to("addPubgM.php"); 
	  }
	 else{
		  $sql="INSERT INTO pubgm_matches(name,date,time,map,type,view,entry_fee) VALUES(:n,:d,:t,:map,:type,:view,:fee)";
		  $stmt=$connectingdb->prepare($sql);
		  $stmt->bindValue(':n',$GameName);
		  $stmt->bindValue(':d',$GameDate);
		  $stmt->bindValue(':t',$GameTime);
		  $stmt->bindValue(':map',$GameMap);
		  $stmt->bindValue(':type',$GameType);
          $stmt->bindValue(':view',$GameView);
          $stmt->bindValue(':fee',$GameEntry);
		  $Execute=$stmt->execute();
          $laid=$connectingdb->lastInsertid();
		  if($Execute){
			  Global $connectingdb;
              $temp="pubgM";
              $name=$temp.$laid;
			  $sq = "create table $name(user_id int(2),name varchar(10),earnings int(2),position int(2))";
              if($connectingdb->query($sq)===true)
	             {
		           $_SESSION["SuccessMessage"]="Match Added";
	             }
	           else
	           {
	        	   
	           }
			   $_SESSION["SuccessMessage"]="Match ".$laid."Added";
			  Redirect_to("addPubgM.php");
			  }
			  else{
				  $_SESSION["ErrorMessage"]="Match Not Added";
			  Redirect_to("addPubgM.php");
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
 <nav class="navbar navbar-expand-lg col-xs-12" style="background-color:#262A2B">
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
         <button class="btn btn-outline-primary my-2 ml-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
     </div>
	 
	 </div>
      
 </nav>
    
 <!--navbar end-->
 
<!--main area-->
 
     <div class="jumbotron jumbotron-fluid" style="background-color:#92939E;">
  <div class="container app-stats">

    <h2 class="app-stats text-center" style="color:black;font-family: 'Times New Roman', Times, serif;"><span><i class="fas fa-plus mr-2"></i></span>ADD PUBG MOBILE MATCHES</h2>   
  </div>
</div> 
    <section class="container py-2">
        <?php
	    echo ErrorMessage();
		echo SuccessMessage();
	  ?>
        <div class="row py-2" style="background-color:#92939E;">
            <div class="offset-lg-2 col-lg-8">
                <form method="POST">
                 <div class="form-group text-white">
                 <label for="GameName">Enter Name</label>
                 <input type="text" class="form-control" id="GameName" name="Name" placeholder="Enter Game Name">
                 </div>
                 <div class="form-group text-white">
                 <label for="GameDate">Enter Date</label>
                 <input type="date" class="form-control" id="GameDate" name="Date" placeholder="Enter Game Date">
                 </div>
                 <div class="form-group text-white">
                 <label for="GameTime">Enter Time</label>
                 <input type="time" class="form-control" id="GameTime" name="Time" placeholder="Enter Game time">
                 </div>
                 <div class="form-group text-white">
                 <label for="selectmap">Select Map</label>
                 <select class="form-control" id="selectmap" name="map">
                 <option>Erangel</option>
                 <option>Sanhok</option>
                 <option>Miramar</option>
                 <option>Vikendi</option>
                 </select>
                 </div>
                 <div class="form-group text-white">
                 <label for="selecttype">Select Type</label>
                 <select class="form-control" id="selecttype" name="type">
                 <option>Solo</option>
                 <option>Duo</option>
                 <option>Squad</option>
                 </select>
                 </div>
                 <div class="form-group text-white">
                 <label for="selectview">Select View</label>
                 <select class="form-control" id="selectview" name="view">
                 <option>TPP</option>
                 <option>FPP</option>
                 </select>
                 </div>
                 <div class="form-group text-white">
                 <label for="entryFee">Entery Fee</label>
                 <input type="text" class="form-control" id="entryFee" name="entry" placeholder="Enter Match Fee in Rupees">
                 </div>
              <button type="submit" class="btn btn-success" name="submit">Submit</button>
              </form>
            </div>
        </div>
    </section>
    
    
    
<!--main Area ends-->
 



<!--Footer Start-->
<div class="jumbotron jumbotron-fluid" id="cardfeature" style="background-color:#262a2b;">
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