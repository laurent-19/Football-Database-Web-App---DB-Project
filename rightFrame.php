<!DOCTYPE html>
<html>

<?php
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$databaseName = "football";

            // connect to database
			$con = mysqli_connect($serverName, $userName, $password, $databaseName);
		
?> 

<?php


session_start(); 
$usr = $_SESSION["usr"];
$pwd = $_SESSION["pwd"];

echo "<br><br>"."The current user is : "."<b>". $usr. "</b>";


# verify is the account and write if the user is Admin or not
$sql = "SELECT users_admins.ID FROM users_admins Where users_admins.Name = '$usr' ";
$result = $con-> query($sql);

if ($result-> num_rows > 0){

    if($result-> fetch_assoc()['ID'] == 2){
        echo "<br><br>"."The current login is : "."<b>". "A USER"."</b>";

    } else {  
        echo "<br><br>"."The current login is : "."<b>". "AN ADMIN"."</b>";
    }

}

?>
</html>
