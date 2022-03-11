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
			<h2> Players with the same market value </h2>
			<tr>
				<th>NamePlayer1</th>
				<th>SurnamePlayer1</th>
                <th>NamePlayer2</th>
				<th>SurnamePlayer2</th>
				<th>MV (mil euro)</th>
			<tr>
			
			<?php

				$sql = "SELECT * FROM PlayerWithSameMV";
				$result = $con-> query($sql);
                $count = 3;
				
				if($result-> num_rows > 0){
					while($row = $result-> fetch_assoc()){
                        if($row["MV (mil euro)"] > 50){
                            echo"<tr><td bgcolor='green'>". $row["NamePlayer1"] ."</td><td>". $row["SurnamePlayer1"] ."</td><td>". $row["NamePlayer2"] ."</td><td>". $row["SurnamePlayer2"] ."</td><td>". $row["MV (mil euro)"] ."</td></tr>";
                          
                        } else{
                            echo"<tr><td bgcolor='red'> ". $row["NamePlayer1"] ."</td><td>". $row["SurnamePlayer1"] ."</td><td>". $row["NamePlayer2"] ."</td><td>". $row["SurnamePlayer2"] ."</td><td>". $row["MV (mil euro)"] ."</td></tr>";
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