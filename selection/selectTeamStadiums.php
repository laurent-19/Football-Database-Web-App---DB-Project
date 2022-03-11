<?php

require 'init.php';

?>

<style>

#stadiums {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#stadiums td, #stadiums th {
  border: 1px solid #ddd;
  padding: 8px;
}

#stadiums tr:nth-child(even){background-color: #f2f2f2;}

#stadiums tr:hover {background-color: #ddd;}

#stadiums th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'stadiums'>
			<h2> All teams and thier home ground Stadiums </h2>

			<tr>
				<th>Name</th>
				<th>Stadium</th>

			<tr>
			
			<?php

				$sql = "SELECT * FROM TeamStadiums";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){

                        echo"<tr><td>". $row["Name"] ."</td><td>". $row["Stadium"] ."</td></tr>";
                        
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No records";
				}
				
				$con-> close();
			?>
</table>