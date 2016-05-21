<html>
	<head><title>Kittens</title></head>
<body>
<?php 
include("..\..\Core\Kitten\KittenHelper.php");
$kittenHelper= new KittenHelper(); 
?>

	<h1>Kittens (<?php echo $_GET['name']?>)</h1>
		
		<?php echo $kittenHelper->DrawListOfKittens();?>
		
		
		<br />
		<br />		
		<form action="../../Core/Kitten/Add.php" method="POST">
		<input type="hidden" name="NestID" value="<?php echo $_GET['id']?>" />
			<label>Naam: </label>
			<input type="text" name="Name"/>
			<br />
			
			<label>Geslacht: </label>
			<select name="Gender">
				<option value="V">Poes</option>
				<option value="M">Kater</option>
				<option value="0" selected>Onbekend</option>
  			</select>
			<br />
			
			<input type="submit" value="Toevoegen"/>
		</form>	
		
</body>
</html>