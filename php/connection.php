<?php
  $server="localhost";
$username="root";
$pass="";
$db ="epicgaming";
$connectingdb=new mysqli($server,$username,$pass,$db);
if($connectingdb->connect_error)
   {
     echo"Connection Error".$connectingdb->connect_error;
   }

?>