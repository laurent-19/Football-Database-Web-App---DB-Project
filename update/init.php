<?php
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$databaseName = "Football";
			
			// connect to database
			echo"Connecting to database ... ";
			$con = mysqli_connect($serverName, $userName, $password, $databaseName);
			
			if(mysqli_connect_errno()){
				echo "Failed to connect!";
			}else {
				echo "Connected!<br><br>";
			}
			
?> 