<?php
include("..\..\Core\Kitten\KittenHelper.php");

if (isset($_GET['id']) && isset($_GET['name'])){
	$kittenHelper= new KittenHelper();
	$kittenHelper->DeleteKitten($_GET['id']);
	echo $_GET['name']. " verwijderd";
}
else {
	echo "Geen ID aanwezig";
}


?>