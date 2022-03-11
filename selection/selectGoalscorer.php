<?php

require 'init.php';

?>

<style>

#goalscorer {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#goalscorer td, #goalscorer th {
  border: 1px solid #ddd;
  padding: 8px;
}

#goalscorer tr:nth-child(even){background-color: #f2f2f2;}

#goalscorer tr:hover {background-color: #ddd;}

#goalscorer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table id = 'goalscorer'>
			<h2> Goalscorers </h2>
			<tr>
				<th>NumberOfGoals</th>
				<th>NumberOfAssists</th>
				<th>Surname</th>
				<th>Name</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM Goalscorers";
				$result = $con-> query($sql);
                $count = 3;
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
                        if($count > 0){
                            echo"<tr><td bgcolor='red'>". $row["NumberOfGoals"] ."</td><td>". $row["NumberOfAssists"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Name"] ."</td></tr>";
                            $count = $count - 1;
                        } else{
                            echo"<tr><td bgcolor='green'> ". $row["NumberOfGoals"] ."</td><td>". $row["NumberOfAssists"] ."</td><td>". $row["Surname"] ."</td><td>". $row["Name"] ."</td></tr>";
                        }
	
					}
					echo "</table>";
				}
				else{
					echo "No elements in the table -- No Goalscorers";
				}
				
				$con-> close();
			?>
</table>