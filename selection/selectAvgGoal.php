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
			<h2> Goals scored with an xG over averxG, showing the most clinical GoalScorers </h2>

			<tr>
				<th>Match_Id</th>
				<th>Date</th>
				<th>Stadium</th>
				<th>Scorer</th>
				<th>Time</th>
				<th>xG</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM GoalsOverAvg";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
                        if($row["xG"] > 0.5){
                            echo"<tr><td bgcolor='red'>". $row["Match_Id"] ."</td><td>". $row["Date"] ."</td><td>". $row["Stadium"]. "</td><td>". $row["Scorer"]. "</td><td>". $row["Time"] ."</td><td>". $row["xG"] ."</td></tr>";
                        }
                        else if($row["xG"] > 0.3){
                            echo"<tr><td bgcolor='blue'>". $row["Match_Id"] ."</td><td>". $row["Date"] ."</td><td>". $row["Stadium"]. "</td><td>". $row["Scorer"]. "</td><td>". $row["Time"] ."</td><td>". $row["xG"] ."</td></tr>";
                        }
                        else {
                            echo"<tr><td bgcolor='green'>". $row["Match_Id"] ."</td><td>". $row["Date"] ."</td><td>". $row["Stadium"]. "</td><td>". $row["Scorer"]. "</td><td>". $row["Time"] ."</td><td>". $row["xG"] ."</td></tr>";
                        }
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No records";
				}
				
				$con-> close();
			?>
</table>