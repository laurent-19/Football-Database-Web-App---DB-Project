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


	<h3> Update coach data </h3>
	<p> The data to be updated: </p>
	
	<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$Boss_Id = $_POST['Boss_Id'];
		$Team_Id =$_POST['Team_Id'];
		
		session_start();
		
		$Coach_Id = $_SESSION['Coach_Id'];
		echo("ID: " .$Coach_Id. "<br><br>");

        echo("Name: " .$name. "<br><br>"); 
		echo("Surname: " .$surname. "<br><br>"); 
		echo("Boss_Id: " .$Boss_Id. "<br><br>"); 
		echo("Team_Id: " .$Team_Id. "<br><br>"); 
        
		
	}		
	?>
		
		
	<h3> Update data </h3> 
	<?php
			echo "Updating data ...";
			
			$sql = "UPDATE Coaches 
				SET Name = '$name', 
					Surname = '$surname', 
					Boss_Id = '$Boss_Id', 
                    Team_Id = '$Team_Id'
				WHERE Coach_Id = $Coach_Id";

			if($con->query($sql) === FALSE){
				echo "Data not updated!";
			}
			else{
				echo "Data updated!";
			}
		?> 
	
</body> 

</html>