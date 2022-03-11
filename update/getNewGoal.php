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

	<h3> Update goal data </h3>

	<h4> Insert data </h4> 
	
	<?php
	
	if(isset($_POST['submit'])){
		
		$PlayerGoal_Id=$_POST['PlayerGoal_Id'];
        $PlayerAssist_Id=$_POST['PlayerAssist_Id'];
        $Time=$_POST['Time'];
        
		echo("ID of goal: PlayerGoal_Id: ".$PlayerGoal_Id. "  PlayerAssist_Id: ".$PlayerAssist_Id. " Time: ".$Time."<br>");
		
		session_start();
		$_SESSION['PlayerGoal_Id'] = $PlayerGoal_Id;
        $_SESSION['PlayerAssist_Id'] = $PlayerAssist_Id;
        $_SESSION['Time'] = $Time;
	}
	?> 
	
	<form method="post" action="updateGoal.php">

	<table width="40%"> 

    <tr>
  	<td>
      Match_Id:
  	</td>
  	<td>
      <input type="number" name="Match_Id" />
  	</td>
	</tr>

    <tr>
  	<td>
      xG:
  	</td>
  	<td>
      <input type="number" name="xG" />
  	</td>
	</tr>

    <tr>
  	<td>
      Type
  	</td>
  	<td>
      <input type="text" name="Type" />
  	</td>
	</tr>

	</table><br><br>	

	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>