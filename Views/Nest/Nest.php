<html>
	<head><title>Kitten Gewichten Monitor</title></head>
<body>
<?php
include("..\..\Core\Nest\NestHelper.php");
$NestHelper= new NestHelper();
?>
	<h1>Nest toevoegen</h1>
		<form action="../../Core/Nest/Add.php" method="POST">
			<label>Naam: </label>
			<input type="text" name="Name" placeholder="Nest A"/>
			<br />
			
			<label>Geboorte datum: </label>
			<input type="date" name="Birthdate"/>
			<br />
			
			<input type="submit" value="Toevoegen"/>
		</form>
		
		<table border="1">
			<tr>
				<th>Naam</th>
				<th>Geboortedatum</th>
				<th></th>
				<th></th>
			</tr>
			<?php echo $NestHelper->DrawListOfNests();?>
		</table>
		
</body>
</html>