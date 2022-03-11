<html> 

<?php

require "init.php";

?>

<body> 

	<h3> Player Info </h3> 
	
	<?php

      if(isset($_POST['submit'])){
		
		$Player_Id=$_POST['Player_Id'];
		echo("ID of player to be deleted: ".$Player_Id."<br>");
		
	}

	?> 
	
	<h3> Deleting data </h3> 
	<?php
    // sql to delete a record
    $sql = "DELETE FROM Players WHERE Player_Id=$Player_Id";

        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }

        $con->close();
		?> 
	
</body> 
</html>
