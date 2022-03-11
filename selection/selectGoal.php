<?php

require 'init.php';

?>

<style>

#goals {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#goals td, #goals th {
  border: 1px solid #ddd;
  padding: 8px;
}

#goals tr:nth-child(even){background-color: #f2f2f2;}

#goals tr:hover {background-color: #ddd;}

#goals th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'goals'>
			<h2> Goals </h2>
			<tr>
				<th>PlayerGoal_Id</th>
				<th>PlayerAssist_Id</th>
				<th>Match_Id</th>
                <th>Time</th>
                <th>xG</th>
				<th>Type</th>
				<th>IsOwnGoal</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM Goals";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
						
						echo"<tr><td>". $row["PlayerGoal_Id"] ."</td><td>". $row["PlayerAssist_Id"] ."</td><td>". $row["Match_Id"] ."</td><td>". $row["Time"] ."</td><td>". $row["xG"] ."</td><td>". $row["Type"] ."</td><td>". $row["IsOwnGoal"] ."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No goals";
				}
				
				$con-> close();
			?>
</table>