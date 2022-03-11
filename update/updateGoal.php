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


	<h3> Update goal data </h3>
	<p> The data to be updated: </p>
	
	<?php

	if(isset($_POST['submit'])){

		$Match_Id = $_POST['Match_Id'];
		$xG = $_POST['xG'];
        $Type = $_POST['Type'];

		session_start();
		
		$PlayerGoal_Id = $_SESSION['PlayerGoal_Id'] ;
        $PlayerAssist_Id = $_SESSION['PlayerAssist_Id'];
        $Time = $_SESSION['Time'];

		echo("PlayerGoal_Id: " .$PlayerGoal_Id. "<br><br>");
		echo("PlayerAssist_Id: " .$PlayerAssist_Id. "<br><br>");
		echo("Time: " .$Time. "<br><br>");

        echo("Match_Id: " .$Match_Id. "<br><br>"); 
		echo("xG: " .$xG. "<br><br>"); 
		echo("Type: " .$Type. "<br><br>"); 
        
	}		
	?>
		
		
	<h3> Update data </h3> 
	<?php
			echo "Updating data ...";
			
			$sql = "UPDATE Goals 
				SET Match_Id = '$Match_Id', 
					xG = '$xG', 
                    Type = '$Type'
				WHERE PlayerGoal_Id = $PlayerGoal_Id and PlayerAssist_Id = $PlayerAssist_Id and Time = $Time ";

			if($con->query($sql) === FALSE){
				echo "Data not updated!";
			}
			else{
				echo "Data updated!";
			}
		?> 
	
</body> 

</html>