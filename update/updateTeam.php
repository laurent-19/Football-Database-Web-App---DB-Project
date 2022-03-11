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


	<h3> Update team data </h3>
	<p> The data to be updated: </p>
	
	<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$Style = $_POST['Style'];
       
		session_start();
		
		$Team_Id = $_SESSION['Team_Id'];
		echo("ID: " .$Team_Id. "<br><br>");

        echo("Name: " .$name. "<br><br>"); 
		echo("Style: " .$Style. "<br><br>");  
	}		
	?>
		
		
	<h3> Update data </h3> 
	<?php
			echo "Updating data ...";
			
			$sql = "UPDATE Teams 
				SET Name = '$name', 
                    Style = '$Style'
				WHERE Team_Id = $Team_Id";

			if($con->query($sql) === FALSE){
				echo "Data not updated!";
			}
			else{
				echo "Data updated!";
			}
		?> 
	
</body> 

</html>