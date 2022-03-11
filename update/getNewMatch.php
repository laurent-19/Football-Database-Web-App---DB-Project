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

	<h3> Update match data </h3>

	<h4> Insert data </h4> 
	
	<?php
	
	if(isset($_POST['submit'])){
		
		$Match_Id=$_POST['Match_Id'];
		echo("ID of match: ".$Match_Id."<br>");
		
		session_start();
		$_SESSION['Match_Id'] = $Match_Id;
	}
	?> 
	
	<form method="post" action="updateMatch.php">

	<table width="40%"> 

	<tr>
  	<td>
      GoalsH:
  	</td>
  	<td>
      <input type="number" name="GoalsH" />
  	</td>
	</tr>

	<tr>
  	<td>
	  GoalsA:
  	</td>
  	<td>
      <input type="number" name="GoalsA" />
  	</td>
	</tr>

	</table><br><br>	

	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>