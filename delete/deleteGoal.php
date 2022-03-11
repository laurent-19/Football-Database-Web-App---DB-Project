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
    $Time = $_POST['Time'];

    }

    echo("ID of the goal: PlayerGoal_Id: ".$PlayerGoal_Id. "  PlayerAssist_Id: ".$PlayerAssist_Id. " Time: ".$Time."<br>");

	?> 
	
	<h3> Deleting data </h3> 


	<?php
    // sql to delete a record
    $sql = "DELETE FROM Goals WHERE (PlayerGoal_Id = $PlayerGoal_Id) and (PlayerAssist_Id = $PlayerAssist_Id) and (Time = $Time)";

        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }

        $con->close();

		?> 

</body> 
</html>








   