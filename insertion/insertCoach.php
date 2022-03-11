<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Coach Info </h3> 
	
	<?php
    
	if(isset($_POST['submit'])){
		// get values
		$Coach_Id=$_POST['Coach_Id'];
		$Boss_Id=$_POST['Boss_Id'];
		$Name=$_POST['Name'];
		$Surname=$_POST['Surname'];
		$Team_Id=$_POST['Team_Id'];

		echo("Coach_Id: ".$Coach_Id."<br>");
		echo("Boss_Id: ".$Boss_Id."<br><br><br>");
		echo("Name: ".$Name."<br>");
		echo("Surname: ".$Surname."<br>");
		echo("Team_Id: ".$Team_Id."<br>");
    }

	?> 
	
	<h3> Inserting data </h3> 
	<?php
			$sql = "INSERT INTO Coaches (Coach_Id, Boss_Id, Name, Surname, Team_Id)
				VALUES ('$Coach_Id', '$Boss_Id', '$Name', '$Surname', '$Team_Id')";
			
			if ($con->query($sql) === FALSE){
				echo "Data inserted!";
			}
			else{
				echo "Data inserted!";
			}
	?> 
	
</body> 

</html>