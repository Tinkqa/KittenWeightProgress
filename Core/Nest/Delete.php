<?php
include("..\..\Core\Nest\NestHelper.php");

if (isset($_GET['id']) && isset($_GET['name'])){
	$NestHelper= new NestHelper();
	$NestHelper->DeleteNest($_GET['id']);
	echo $_GET['name']. " verwijderd";
}
else {
	echo "Geen ID aanwezig";
}


?>