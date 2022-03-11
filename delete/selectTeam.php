<html>

<?php

require "init.php";

session_start(); 
$usr = $_SESSION["usr"];

# verify is the account is Admin, if not, send the user to an info page
$sql = "SELECT users_admins.ID FROM users_admins Where users_admins.Name = '$usr' ";
$result = $con-> query($sql);

if ($result-> num_rows > 0){
    if($result-> fetch_assoc()['ID'] == 2){
        header("Location: notAdmin.php");
        exit;
    } 
}

?>

<form method="post" action="deleteTeam.php">


<?php

    echo"<h4> Select the team name </h4>";

    $sql = mysqli_query($con, "SELECT Team_Id, Name FROM Teams");
    
    if(mysqli_num_rows($sql)){
        $select = '<select name="Team_Id">';
        while($rs = mysqli_fetch_array($sql)){
            $select.='<option value="'. $rs['Team_Id']. '">'. $rs['Name'].'</option>';
        }
    }
    $select.='</select>';
    echo $select;
    echo("<br>. <br>");

    
?>

<input type="submit" name="submit" value="Submit">
</form>


</html>




