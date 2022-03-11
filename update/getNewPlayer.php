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

	<h3> Update player data </h3>

	<h4> Insert data </h4> 
	
	<?php
	
	if(isset($_POST['submit'])){
		
		$Player_Id=$_POST['Player_Id'];
		echo("ID of player: ".$Player_Id."<br>");
		
		session_start();
		$_SESSION['Player_Id'] = $Player_Id;
	}
	?> 
	
	<form method="post" action="updatePlayer.php">

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
      Position:
  	</td>
  	<td>
      <input type="text" name="Position" />
  	</td>
	</tr>

	<tr>
  	<td>
      Age:
  	</td>
  	<td>
      <input type="number" name="Age" />
  	</td>
	</tr>

	<tr>
  	<td>
      MarketValue:
  	</td>
  	<td>
      <input type="number" name="MarketValue" />
  	</td>
	</tr>
	
	</table><br><br>	

	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>