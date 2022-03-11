<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Team Info </h3> 
	
	<?php

      if(isset($_POST['submit'])){
		
		$Team_Id=$_POST['Team_Id'];
		echo("ID of team to be deleted: ".$Team_Id."<br>");
		
	}

	?> 
	
	<h3> Deleting data </h3> 
	<?php
    // sql to delete a record
    $sql = "DELETE FROM Teams WHERE Team_Id=$Team_Id";

        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }

        $con->close();
		?> 
	
</body> 
</html>
