<?php
include("..\..\Models\Kitten.php");
include("..\..\Core\Basehelper.php");

class KittenHelper extends BaseHelper{
		
		function __construct (){
			parent::__construct();
		}		
		
		public function AddKitten($name,$gender,$nestID){
			$cxn = parent::GetConnection();
			$sql = "INSERT INTO kitten(Name, Gender, NestID) VALUES ('$name','$gender',$nestID)";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
		}	
		
		public function DrawListOfKittens(){
			$cxn = parent::GetConnection();
			$sql = "SELECT * FROM kitten ORDER BY NAME ASC";
			$result= mysqli_query($cxn,$sql) or die ("Query died");
			$html="";
			if(mysqli_num_rows($result)==0){
				return $html;
			} 
			$html="<table border='1'><tr><th>Naam</th><th>Geslacht</th><th></th><th></th></tr>";			
			
			while($row = mysqli_fetch_assoc($result)){
				$deleteUrl = "<a href ='/KittenWeightProgress/Core/Kitten/Delete.php?id=".$row['ID']."&name=".$row['Name']."'>Verwijderen</a>";
				$updateUrl = "<a href ='/KittenWeightProgress/Views/Kitten/Update.php?id=".$row['ID']."'>Aanpassen</a>";
				$html = $html."<tr><td>".$row['Name']."</td><td>".$row['Gender']."</td><td>".$updateUrl."</td><td>".$deleteUrl."</td></tr>";
			}
			$html=$html."</table>";
			return $html;
		}
		
		public function DeleteKitten($id){
			$cxn = parent::GetConnection();
			$sql = "DELETE FROM kitten WHERE ID = $id";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
		}
		
		public function UpdateKitten($id,$name,$gender){
			$cxn = parent::GetConnection();
			$sql = "UPDATE kitten SET Name='$name',Gender='$gender' WHERE ID=$id";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
		}
		
		public function GetKitten($id){
			$cxn = parent::GetConnection();
			$sql = "SELECT ID, Name, Gender FROM kitten WHERE ID=$id";
			$result = mysqli_query($cxn,$sql) or die ("Query died");
			$row = mysqli_fetch_assoc($result);
			
			$kitten= new Kitten($row['Name'],$id,$row['Gender']);
			return $kitten;			
		}
		

}

?>