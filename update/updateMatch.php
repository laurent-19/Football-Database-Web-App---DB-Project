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


	<h3> Update match data </h3>
	<p> The data to be updated: </p>
	
	<?php

	if(isset($_POST['submit'])){

		$GoalsH = $_POST['GoalsH'];
		$GoalsA = $_POST['GoalsA'];
	
		session_start();
		
		$Match_Id = $_SESSION['Match_Id'];
		echo("ID: " .$Match_Id. "<br><br>");

        echo("GoalsH: " .$GoalsH. "<br><br>"); 
		echo("GoalsA: " .$GoalsA. "<br><br>"); 
		 
	}		
	?>
		
		
	<h3> Update data </h3> 
	<?php
			echo "Updating data ...";
			
			$sql = "UPDATE Matches
				SET GoalsH = '$GoalsH', 
                    GoalsA = '$GoalsA' 
				WHERE Match_Id = $Match_Id";

			if($con->query($sql) === FALSE){
				echo "Data not updated!";
			}
			else{
				echo "Data updated!";
			}
		?> 
	
</body> 

</html>