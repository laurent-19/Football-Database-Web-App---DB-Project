<?php

require 'init.php';

?>

<style>

#matches {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#matches td, #matches th {
  border: 1px solid #ddd;
  padding: 8px;
}

#matches tr:nth-child(even){background-color: #f2f2f2;}

#matches tr:hover {background-color: #ddd;}

#matches th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'matches'>
			<h2> Matches </h2>
			<tr>
				<th>Match_Id</th>
				<th>TeamH_Id </th>
				<th>TeamA_Id</th>
                <th>GoalsH</th>
                <th>GoalsA</th>
				<th>Date</th>
                <th>Stadium</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM Matches";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
						echo"<tr><td>". $row["Match_Id"] ."</td><td>". $row["TeamH_Id"] ."</td><td>". $row["TeamA_Id"] ."</td><td>". $row["GoalsH"] ."</td><td>". $row["GoalsA"] ."</td><td>". $row["Date"] ."</td><td>". $row["Stadium"] ."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No matches";
				}
				
				$con-> close();
			?>
</table>