<!DOCTYPE html>
<html> 

<body> 
	<style>

	table {
	border: none;
	}

	th {
	border: none;
	height: 60px;
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

	<h3> Update team data </h3>

	<h4> Insert data </h4> 
	
	<?php
	
	if(isset($_POST['submit'])){
		
		$Team_Id=$_POST['Team_Id'];
		echo("ID of team: ".$Team_Id."<br>");
		
		session_start();
		$_SESSION['Team_Id'] = $Team_Id;
	}
	?> 
	
	<form method="post" action="updateTeam.php">

	<table width="40%"> 

	<td>
      Name:
  	</td>
   <td>
      <input type="text" name="name" />
  	</td>
	</tr>

	<tr>
  	<td>
      Style:
  	</td>
  	<td>
      <input type="text" name="Style" />
  	</td>
	</tr>
	
	</table><br><br>	

	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>