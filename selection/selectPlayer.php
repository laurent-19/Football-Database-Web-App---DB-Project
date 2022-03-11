<?php

require 'init.php';

?>

<style>

#players {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#players td, #players th {
  border: 1px solid #ddd;
  padding: 8px;
}

#players tr:nth-child(even){background-color: #f2f2f2;}

#players tr:hover {background-color: #ddd;}

#players th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'players'>
			<h2> Players </h2>

			<tr>
				<th>Player_Id</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Team_Id</th>
				<th>Position</th>
				<th>Age</th>
				<th>MarketValue</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM Players";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
						echo"<tr><td>". $row["Player_Id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Surname"]. "</td><td>". $row["Team_Id"]. "</td><td>". $row["Position"] ."</td><td>". $row["Age"] ."</td><td>". $row["MarketValue"] ."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No Players";
				}
				
				$con-> close();
			?>
</table>