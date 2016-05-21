<?php
	include("..\..\Core\Kitten\KittenHelper.php");
	
	if(empty($_POST['Name']) || ($_POST['Gender'] != "M" && $_POST['Gender'] != "V" && $_POST['Gender'] != "0")     ){
		echo "Niet opgeslagen!";
	}
	else{
	$kittenHelper= new KittenHelper();		
		$kittenHelper->UpdateKitten($_POST['id'],$_POST['Name'],$_POST['Gender']);
		echo $_POST['Name']. " gewijzigd";
	}

?>