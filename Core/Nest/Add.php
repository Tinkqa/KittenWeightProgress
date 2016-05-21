<?php
	include("..\..\Core\Nest\NestHelper.php");
	
	if(empty($_POST['Name']) || empty($_POST['Birthdate'])){
		echo "Niet opgeslagen!";
	}
	else{
		$NestHelper= new NestHelper();		
		$NestHelper->AddNest($_POST['Name'],$_POST['Birthdate']);
		echo $_POST['Name']. " toegevoegd";
	}	
?>

