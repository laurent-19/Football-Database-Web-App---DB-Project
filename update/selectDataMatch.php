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

<h3> Update match data </h3>

<form method="post" action="getNewMatch.php">


<?php

    echo"<h4> Select the match date and stadium </h4>";

    $sql = mysqli_query($con, "SELECT Match_Id, Date, Stadium FROM Matches");
    
    if(mysqli_num_rows($sql)){
        $select = '<select name="Match_Id">';
        while($rs = mysqli_fetch_array($sql)){
            $select.='<option value="'. $rs['Match_Id']. '">'.$rs['Date']. ' '. $rs['Stadium'].'</option>';
        }
    }
    $select.='</select>';
    echo $select;
    echo("<br>. <br>");
?>

<input type="submit" name="submit" value="Submit">
</form>



</html>