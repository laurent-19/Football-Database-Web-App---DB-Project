<!DOCTYPE html>
<html> 

<?php

require "init.php";

?>

<body> 
	<style>

	table{
	border: none;
	border-collapse: collapse;
	}

	th {
	border: none;
	height: 80px;
	text-align: left; 
	width: 70%; 
	}

	td {
	border: none;
	height: 60px;
	text-align: left;
	width: 30%; 
	}
	</style>


	<h3> Update player data </h3>
	<p> The data to be updated: </p>
	
	<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$surname = $_POST['surname'];
        $Position = $_POST['Position'];
        $Age = $_POST['Age'];
		$MarketValue = $_POST['MarketValue'];
		
		session_start();
		
		$Player_Id = $_SESSION['Player_Id'];
		echo("ID: " .$Player_Id. "<br><br>");

        echo("Name: " .$name. "<br><br>"); 
		echo("Surname: " .$surname. "<br><br>"); 
		echo("Position: " .$Position. "<br><br>"); 
		echo("Age: " .$Age. "<br><br>"); 
        echo("MarketValue: " .$MarketValue. "<br><br>"); 
        
	}		
	?>
		
		
	<h3> Update data </h3> 
	<?php
			echo "Updating data ...";
			
			$sql = "UPDATE Players 
				SET Name = '$name', 
					Surname = '$surname', 
					Position = '$Position', 
                    Age = '$Age',
                    MarketValue = '$MarketValue'
				WHERE Player_Id = $Player_Id";

			if($con->query($sql) === FALSE){
				echo "Data not updated!";
			}
			else{
				echo "Data updated!";
			}
		?> 
	
</body> 

</html>