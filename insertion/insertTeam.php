<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Team Info </h3> 
	
	<?php
    
	if(isset($_POST['submit'])){
		// get values
		$Team_Id=$_POST['Team_Id'];
		$Name=$_POST['Name'];
		$Style=$_POST['Style'];


		echo("Team_Id: ".$Team_Id."<br>");
		echo("Name: ".$Name."<br><br><br>");
		echo("Style: ".$Style."<br>");

    }

	?> 
	
	<h3> Inserting data </h3> 
	<?php
			$sql = "INSERT INTO Teams (Team_Id, Name, Style)
				VALUES ('$Team_Id', '$Name', '$Style')";
			
			if ($con->query($sql) === FALSE){
				echo "Data inserted!";
			}
			else{
				echo "Data inserted!";
			}
	?> 
	
</body> 

</html>