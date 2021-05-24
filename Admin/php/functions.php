<?php require_once("php/connection.php"); ?>
<?php require_once("php/sessions.php");   ?>
<?php
  function Redirect_to($New_Location)
  {
	header("Location:".$New_Location);
    exit;	
  }
?>