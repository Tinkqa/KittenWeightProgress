<?php
	include("..\..\Core\Kitten\KittenHelper.php");
	
if(empty($_POST['Name']) || ($_POST['Gender'] != "M" && $_POST['Gender'] != "V" && $_POST['Gender'] != "0")     ){
		echo "Niet opgeslagen!";
	}
else{
	$kittenHelper= new KittenHelper();		
		$kittenHelper->AddKitten($_POST['Name'],$_POST['Gender'],$_POST['NestID']);
		echo $_POST['Name']. " toegevoegd";
}

?>