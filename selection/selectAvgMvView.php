<?php

require 'init.php';

?>

<style>

#mv {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#mv td, #mv th {
  border: 1px solid #ddd;
  padding: 8px;
}

#mv tr:nth-child(even){background-color: #f2f2f2;}

#mv tr:hover {background-color: #ddd;}

#mv th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'mv'>
			<h2> MarketValues of the Squads and Average MarketValue per Team </h2>

			<tr>
				<th>Name</th>
				<th>TotalMV</th>
				<th>AverageMV</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM TotalAvgMV";
				$result = $con-> query($sql);
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
                        
						if($row["AverageMV"] > 50){
                            echo"<tr><td bgcolor='red'>". $row["Name"] ."</td><td>". $row["TotalMV"] ."</td><td>". $row["AverageMV"] ."</td></tr>";
                        } else if($row["AverageMV"] > 25){
                            echo"<tr><td bgcolor='green'>". $row["Name"] ."</td><td>". $row["TotalMV"] ."</td><td>". $row["AverageMV"] ."</td></tr>";
                        } else{
                            echo"<tr><td bgcolor='blue'>". $row["Name"] ."</td><td>". $row["TotalMV"] ."</td><td>". $row["AverageMV"] ."</td></tr>";
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