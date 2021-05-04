<?php 

   $server="localhost";
   $username="root";
   $db = "epicgaming"; 
   $pass="";
   $con=new mysqli($server,$username,$pass,$db);
   if($con->connect_error)
   {
	   echo"Connection Error".$con->connect_error;
   }
   else
   {
	   echo"Connection Established<br>";
	  //  $sql="create database epicgaming";
   
    // $sql="create table pubgm_matches(name char(20),date varchar(10),time varchar(10),map char(20),type char(10),view char(5),entry_fee int(10))";
	 
    // $sql="create table users(user_id int(2) PRIMARY KEY  auto_increment,mobile_number int(2),user_game_name varchar(30),pubg_id varchar(30),password varchar(10))";
    
    $sql="ALTER TABLE users ADD Name char(20)";

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