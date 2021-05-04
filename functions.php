<?php
  function Redirect_to($New_Location)
  {
	header("Location:".$New_Location);
    exit;	
  }
  function Login($mobile,$pass){
    Global $connectingdb;
			$sql = "SELECT * FROM users where password=:passWord AND mobile_number=:mob LIMIT 1";
			$queryEx = $connectingdb->prepare($sql);
			$queryEx -> bindValue(':mob',$mobile);
			$queryEx -> bindValue(':passWord',$pass);
			$queryEx->execute();
			$result = $queryEx->rowcount();
			if($result==1){
        
        return $found = $queryEx->fetch();
			}
			else{
			
        return null;
			}
  }

  function confirmLogin(){
    if(isset($_SESSION["MobileNumber"])){
      return true;
    }
    else{
      return false;
    }
  }
 ?>