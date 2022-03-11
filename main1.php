<HTML>

<?php
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$databaseName = "football";
			
			echo"Connecting to database ... ";
			$con = mysqli_connect($serverName, $userName, $password, $databaseName);		
?> 


<?php
	
if(isset($_POST['submit'])){

    // get values
$username=$_POST['usr'];
$password=$_POST['pwd'];

session_start(); # sending the username and pwd to main.php
$_SESSION["usr"] = $username;
$_SESSION["pwd"] = $password;

}

$sql = "SELECT users_admins.Name FROM users_admins Where users_admins.Password = $password";
$result = $con-> query($sql);

if ($result-> num_rows > 0){
    if($result-> fetch_assoc()['Name'] == $username){
        header("Location: main.php");
        exit;
    } 
} 
    echo("<br><br><br><br>");

    echo("The username ".$username." or password ".$password." incorrect or inexistant!");
    echo("<br>");
    echo("Go back to index page!"."  ");
    echo("<a href='index.html' class='center'> Go back to the Login Page </a>");



?>
</HTML>