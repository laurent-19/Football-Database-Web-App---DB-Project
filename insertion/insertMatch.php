<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Match Info </h3> 
	
	<?php
	if(isset($_POST['submit'])){

        $Match_Id = $_POST['Match_Id']; 
        $TeamH_Id = $_POST['TeamH_Id'];
        $TeamA_Id = $_POST['TeamA_Id'];
		$GoalsH = $_POST['GoalsH'];
		$GoalsA=$_POST['GoalsA'];

		$Month=$_POST['month'];
		$Day=$_POST['day'];
		$Year=$_POST['year'];

		$Stadium=$_POST['Stadium'];

	
		echo("Match_Id: " .$Match_Id. "<br>");
		echo("TeamH_Id: " .$TeamH_Id. "<br>");
		echo("TeamA_Id: " .$TeamA_Id. "<br>");
		echo("GoalsH: " .$GoalsH. "<br>");
		echo("GoalsA: " .$GoalsA. "<br>");

		$date = $Year."-".$Month."-".$Day;
		echo("Date of match: " .$date. "<br><br>");
		echo("Stadium: " .$Stadium. "<br>");

	}
	?> 
	
	<h3> Inserting data </h3> 
	<?php
			$sql = "INSERT INTO Matches (Match_Id, TeamH_Id, TeamA_Id, GoalsH , GoalsA ,Date, Stadium)
				VALUES ('$Match_Id', '$TeamH_Id', '$TeamA_Id', '$GoalsH', '$GoalsA', '$date', '$Stadium')";
			
			if ($con->query($sql) === FALSE){
				echo "Data inserted!";
			}
			else{
				echo "Data inserted!";
			}
		?> 
	
</body> 
</html>