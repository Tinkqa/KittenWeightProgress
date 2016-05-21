<?php
include("..\..\Models\Nest.php");
include("..\..\Core\Basehelper.php");

	class NestHelper extends BaseHelper{
		
		function __construct (){
			parent::__construct();
		
		}
		
		public function DrawListOfNests(){
			$cxn = parent::GetConnection();
			$sql = "SELECT * FROM nest ORDER BY NAME ASC";
			$result= mysqli_query($cxn,$sql) or die ("Query died");
			$html="";
			while($row = mysqli_fetch_assoc($result)){
				$deleteUrl = "<a href ='/KittenWeightProgress/Core/Nest/Delete.php?id=".$row['ID']."&name=".$row['Name']."'>Verwijderen</a>";
				$updateUrl = "<a href ='/KittenWeightProgress/Views/Nest/Update.php?id=".$row['ID']."'>Aanpassen</a>";
				$addKittenUrl = "<a href ='/KittenWeightProgress/Views/Kitten/Overview.php?id=".$row['ID']."&name=".$row['Name']."'>".$row['Name']."</a>"; 
				$date = new DateTime($row['Birthdate']);
				$html = $html."<tr><td>".$addKittenUrl."</td><td>".$date->format('d-m-Y')."</td><td>".$updateUrl."</td><td>".$deleteUrl."</td></tr>";
			}
			return $html;
		}

		public function AddNest($name,$birthdate){
			$cxn = parent::GetConnection();
			$sql = "INSERT INTO nest(Name, Birthdate) VALUES ('$name','$birthdate')";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
		}	
		
		public function DeleteNest($id){
			$cxn = parent::GetConnection();
			$sql = "DELETE FROM nest WHERE ID = $id";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
		}
		
		public function UpdateNest($id,$name,$birthdate){
			$cxn = parent::GetConnection();
			$sql = "UPDATE nest SET Name='$name',Birthdate='$birthdate' WHERE ID=$id";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
		}
		
		public function GetNest($id){
			$cxn = parent::GetConnection();
			$sql = "SELECT ID, Name, Birthdate FROM nest WHERE ID=$id";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
			$row = mysqli_fetch_assoc($result);
			
			$nest= new Nest($row['Name'],$id,$row['Birthdate']);
			return $nest;			
		}		
	}	
?>