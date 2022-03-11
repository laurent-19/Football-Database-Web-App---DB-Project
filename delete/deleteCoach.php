<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Coach Info </h3> 
	
	<?php

      if(isset($_POST['submit'])){
		
		$Coach_Id=$_POST['Coach_Id'];
		echo("ID of coach to be deleted: ".$Coach_Id."<br>");
		
	}

	?> 
	
	<h3> Deleting data </h3> 
	<?php
    // sql to delete a record
    $sql = "DELETE FROM Coaches WHERE Coach_Id=$Coach_Id";

        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }

        $con->close();
		?> 
	
</body> 
</html>
