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
 <meta name="viewport" content="width=device-width,initial-scale=1">
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
         <button class="btn btn-outline-primary my-2 ml-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>
	 
	 </div>
      
 </nav>
    
 <!--navbar end-->
 
<!--main area-->
 
     <div class="jumbotron jumbotron-fluid" style="background-color:#92939E;">
  <div class="container app-stats">

    <h2 class="app-stats text-center" style="color:black;font-family: 'Times New Roman', Times, serif;"><span><i class="fas fa-user mr-2"></i></span>ADMIN PANEL</h2>
      <div class="row">
          <div class="col-md-3">
              <a href="addemployee.php" class="btn btn-primary btn-block mb-2"><span><i class="fas fa-user-plus"></i>Add Employee</span></a>
          </div>
          <div class="col-md-3">
              <a href="addmatch.php" class="btn btn-success btn-block mb-2"><span><i class="fas fa-plus"></i>Add Match</span></a>
          </div>
          <div class="col-md-3">
              <a href="edituser.php" class="btn btn-warning btn-block mb-2"><span><i class="fas fa-edit"></i>Edit User</span></a>
          </div>
          <div class="col-md-3">
              <a href="editemployee.php" class="btn btn-danger btn-block mb-2"><span><i class="fas fa-edit"></i>Edit Employee</span></a>
          </div>
      </div>
      
  </div>
</div> 
    <section class="container py-2 mb-4">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="app-stats text-center mt-3" style="color:black;font-family: 'Times New Roman', Times, serif;">PUBG Mobile Matches</h2>
                <div class=" table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead bg-dark" style="color:white;">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Map</th>
                        <th>Type</th>
                        <th>View</th>
                        <th>Entry Fee</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php
                       global $connectingdb;
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
                    <tbody class="tbody">
                    <tr>
                        <td>#<?php echo  $id;       ?></td>
                        <td> <?php echo  $mName;    ?></td>
                        <td> <?php echo  $date;     ?></td>
                        <td> <?php echo  $time;     ?></td>
                        <td> <?php echo  $map;      ?></td>
                        <td> <?php echo  $mType;    ?></td>
                        <td> <?php echo  $mView;    ?></td>
                        <td> <?php echo  $entryFee; ?></td>
                        <td><a href="editgame.php" class="btn btn-warning mb-1"><i class="fas fa-edit"></i>     </a>
                            <a href="deletegame.php" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                <?php } ?>
                </table>
                    </div>
            </div>
        </div>
    
    <div class="row">  
            <div class="col-lg-12">
                <h2 class="app-stats text-center mt-3" style="color:black;font-family: 'Times New Roman', Times, serif;">PUBG Mobile Lite Matches</h2>
                <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead bg-dark" style="color:white;">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Map</th>
                        <th>Type</th>
                        <th>View</th>
                        <th>Entry Fee</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php
                       global $connectingdb;
                       $sql="SELECT * FROM pubglite_matches";
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
                    <tbody class="tbody">
                    <tr>
                        <td>#<?php echo $id;       ?></td>
                        <td> <?php echo $mName;    ?></td>
                        <td> <?php echo $date;     ?></td>
                        <td> <?php echo $time;     ?></td>
                        <td> <?php echo $map;      ?></td>
                        <td> <?php echo $mType;    ?></td>
                        <td> <?php echo $mView;    ?></td>
                        <td> <?php echo $entryFee; ?></td>
                        <td><form method="POST">
                            <button type="submit" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>                            
                            </form></td>
                        
                    </tr>
                    </tbody>
                <?php } ?>
                </table>
        </div>
            
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