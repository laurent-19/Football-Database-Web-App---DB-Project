<?php

require 'init.php';

?>

<style>

#coaches {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#coaches td, #coaches th {
  border: 1px solid #ddd;
  padding: 8px;
}

#coaches tr:nth-child(even){background-color: #f2f2f2;}

#coaches tr:hover {background-color: #ddd;}

#coaches th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id='coaches'>
			<h2> Coaches </h2>

			<tr>
				<th>Coach_Id</th>
				<th>Boss_Id</th>
				<th>Name</th>
				<th>Surname</th>
                <th>Team_Id</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM Coaches";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
						if($row["Boss_Id"] == 1){
                            echo"<tr><td bgcolor='red'>". $row["Coach_Id"] ."</td><td>". $row["Boss_Id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Team_Id"] ."</td></tr>";
                        } else if($row["Boss_Id"] == 2){
                            echo"<tr><td bgcolor='green'>". $row["Coach_Id"] ."</td><td>". $row["Boss_Id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Team_Id"] ."</td></tr>";
                        } else{
							echo"<tr><td bgcolor='blue'>". $row["Coach_Id"] ."</td><td>". $row["Boss_Id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Team_Id"] ."</td></tr>";
						}
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No coaches";
				}
				
				$con-> close();
			?>
</table>