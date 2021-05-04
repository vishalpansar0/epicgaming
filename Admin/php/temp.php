<?php 
  <?php
   $server="localhost";
   $username="root";
   $pass="";
   $con=new mysqli($server,$username,$pass);
   if($con->connect_error)
   {
	   echo"Connection Error".$con->connect_error;
   }
   else
   {
	   echo"Connection Established<br>";
	   $sql="create database epicgaming";
	   if($con->query($sql)===true)
	   {
		   echo"Database Created";
	   }
	   else
	   {
		   echo"Database not created".$con->error;
	   }
	   
   }

?>

?>