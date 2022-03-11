<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Player Info </h3> 
	
	<?php
	if(isset($_POST['submit'])){

		$Player_Id = $_POST['Player_Id'];
		$Team_Id=$_POST['Team_Id'];
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$Position=$_POST['Position'];
		$Age=$_POST['Age'];
		$MarketValue=$_POST['MarketValue'];
		
        echo("Player_Id: " .$Player_Id. "<br>"); 
        echo("Team_Id: " .$Team_Id. "<br><br>"); 
		echo("Name: " .$name. "<br>"); 
        echo("Surname: " .$surname. "<br><br>"); 
		echo("Position: " .$Position. "<br>"); 
		echo("Age: " .$Age. "<br>"); 
        echo("MarketValue: " .$MarketValue. "<br><br>"); 

	}
	?> 
	
	<h3> Inserting data </h3> 
	<?php
			$sql = "INSERT INTO Players (Player_Id, Team_Id, Name, Surname, Position, Age, MarketValue)
				VALUES ('$Player_Id', '$Team_Id', '$name', '$surname', '$Position', '$Age', '$MarketValue')";
			
			if ($con->query($sql) === FALSE){
				echo "Data inserted!";
			}
			else{
				echo "Data inserted!";
			}
		?> 
	
</body> 
</html>