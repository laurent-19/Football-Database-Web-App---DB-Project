<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Match Info </h3> 
	
	<?php

      if(isset($_POST['submit'])){
		
		$Match_Id=$_POST['Match_Id'];
		echo("ID of match to be deleted: ".$Match_Id."<br>");
		
	}

	?> 
	
	<h3> Deleting data </h3> 
	<?php
    // sql to delete a record
    $sql = "DELETE FROM Matches WHERE Match_Id=$Match_Id";

        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }

        $con->close();
		?> 
	
</body> 
</html>
