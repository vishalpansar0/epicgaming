<?php require_once("../php/connection.php"); ?>
<?php require_once("../php/functions.php");  ?>
<?php require_once("../php/sessions.php");   ?>
<?php
   $_SESSION["UserId"] = null;
   $_SESSION["Name"] = null;
   $_SESSION["MobileNumber"] = null;
   session_destroy();
   Redirect_to("../login.php");


?>