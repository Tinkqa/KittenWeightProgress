<?php
include("..\..\Config\Credentials.inc");
	
class BaseHelper{
		
		function __construct (){
		}


		protected function GetConnection()
		{
			global $host, $user, $db_password, $database;
			$cxn = mysqli_connect($host,$user,$db_password,$database) or die ("Query died: connect");
			return $cxn;			
		}
	}

?>