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

	<h3> Update coach data </h3>

	<h4> Insert data </h4> 
	
	<?php
	
	if(isset($_POST['submit'])){
		
		$Coach_Id=$_POST['Coach_Id'];
		echo("ID of coach: ".$Coach_Id."<br>");
		
		session_start();
		$_SESSION['Coach_Id'] = $Coach_Id;
	}
	?> 
	
	<form method="post" action="updateCoach.php">

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
      Surname:
  	</td>
  	<td>
      <input type="text" name="surname" />
  	</td>
	</tr>

	<tr>
  	<td>
      Boss_Id:
  	</td>
  	<td>
      <input type="number" name="Boss_Id" />
  	</td>
	</tr>

	<tr>
  	<td>
      Team_Id:
  	</td>
  	<td>
      <input type="number" name="Team_Id" />
  	</td>
	</tr>
	
	</table><br><br>	

	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>