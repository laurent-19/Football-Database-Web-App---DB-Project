<?php

require 'init.php';

?>

<style>

#teams {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#teams td, #teams th {
  border: 1px solid #ddd;
  padding: 8px;
}

#teams tr:nth-child(even){background-color: #f2f2f2;}

#teams tr:hover {background-color: #ddd;}

#teams th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'teams'>
			<h2> Teams </h2>
			<tr>
				<th>Team_Id</th>
				<th>Name</th>
				<th>Style</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM Teams";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
						echo"<tr><td>". $row["Team_Id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Style"] ."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No teams";
				}
				
				$con-> close();
			?>
</table>