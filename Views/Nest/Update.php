<?php
	include("..\..\Core\Nest\NestHelper.php");
	$NestHelper= new NestHelper();
	
	$nest = $NestHelper->GetNest($_GET['id']);
		
?>
<form action="../../Core/Nest/Update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $nest->id ?>" />
			
			<label>Naam: </label>
			<input type="text" name="Name" value="<?php echo $nest->name ?>"/>
			<br />
			
			<label>Geboorte datum: </label>
			<input type="date" name="Birthdate" value="<?php echo $nest->birthdate ?>"/>
			<br />
			
			<input type="submit" value="Opslaan"/>
		</form>
