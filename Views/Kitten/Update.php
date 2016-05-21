<?php
	include("..\..\Core\Kitten\KittenHelper.php");
	$kittenHelper= new KittenHelper();
	
	$kitten = $kittenHelper->GetKitten($_GET['id']);
	
?>
<form action="../../Core/Kitten/Update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $kitten->id ?>" />
			
			<label>Naam: </label>
			<input type="text" name="Name" value="<?php echo $kitten->name ?>"/>
			<br />
			
			<label>Geslacht: </label>
			<select name="Gender">
				<option value="V" <?php echo $kitten->gender == "V" ?  "selected=selected" : "" ?>>Poes</option>
				<option value="M" <?php echo $kitten->gender == "M" ? "selected=selected" : "" ?>>Kater</option>
				<option value="0" <?php echo $kitten->gender == "0" ?  "selected=selected" : "" ?>>Onbekend</option>
  			</select>
			<br />			
			<input type="submit" value="Wijzigen"/>
		</form>
