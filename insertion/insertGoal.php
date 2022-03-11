<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Goal Info </h3> 
	
	<?php
	if(isset($_POST['submit'])){

        $PlayerGoal_Id = $_POST['PlayerGoal_Id']; 
        $PlayerAssist_Id = $_POST['PlayerAssist_Id'];
        $Match_Id = $_POST['Match_Id'];
		$Time = $_POST['Time'];
		$xG=$_POST['xG'];
        $Type=$_POST['Type'];
		$IsOwnGoal=$_POST['IsOwnGoal'];

	
		echo("PlayerGoal_Id: " .$PlayerGoal_Id. "<br>");
		echo("PlayerAssist_Id: " .$PlayerAssist_Id. "<br>");
		echo("Match_Id: " .$Match_Id. "<br>");
		echo("Time: " .$Time. "<br>");
		echo("xG: " .$xG. "<br>");
        echo("Type: " .$Type. "<br>");
		echo("IsOwnGoal: " .$IsOwnGoal. "<br>");

	}
	?> 
	
	<h3> Inserting data </h3> 
	<?php
			$sql = "INSERT INTO Goals (PlayerGoal_Id, PlayerAssist_Id, Match_Id, Time , xG ,Type, IsOwnGoal)
				VALUES ('$PlayerGoal_Id', '$PlayerAssist_Id', '$Match_Id', '$Time', '$xG', '$Type', '$IsOwnGoal')";
			
			if ($con->query($sql) === FALSE){
				echo "Data inserted!";
			}
			else{
				echo "Data inserted!";
			}
		?> 
	
</body> 
</html>