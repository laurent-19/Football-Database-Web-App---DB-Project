<?php

require 'init.php';

?>

<style>

#assists {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#assists td, #assists th {
  border: 1px solid #ddd;
  padding: 8px;
}

#assists tr:nth-child(even){background-color: #f2f2f2;}

#assists tr:hover {background-color: #ddd;}

#assists th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'assists'>
			<h2> Goals with no player on the assist, therefore those are goals where the opposition gave away the ball </h2>

			<tr>
				<th>Name</th>
				<th>Surname</th>
				<th>Type</th>
                <th>xG</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM GoalsWithNoAssist";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
                        
						if($row["xG"] > 0.5){
                            echo"<tr><td bgcolor='red'>". $row["Name"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Type"] ."</td><td>". $row["xG"] ."</td></tr>";
                        } else if($row["xG"] > 0.2){
                            echo"<tr><td bgcolor='green'>". $row["Name"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Type"] ."</td><td>". $row["xG"] ."</td></tr>";
                        } else{
                            echo"<tr><td bgcolor='blue'>". $row["Name"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Type"] ."</td><td>". $row["xG"] ."</td></tr>";
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