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

<h3> Update team data </h3>

<form method="post" action="getNewGoal.php">


<?php

    echo"<h4> Select the goal ids </h4>";

    $sql = mysqli_query($con, "SELECT PlayerGoal_Id, PlayerAssist_Id, Time FROM Goals");
    
    if(mysqli_num_rows($sql)){
        $select1 = '<select name="PlayerGoal_Id">';
        $select2 = '<select name="PlayerAssist_Id">';
        $select3 = '<select name="Time">';
        while($rs = mysqli_fetch_array($sql)){
            $select1.='<option value="'. $rs['PlayerGoal_Id']. '">'.$rs['PlayerGoal_Id'].'</option>';
            $select2.='<option value="'. $rs['PlayerAssist_Id']. '">'.$rs['PlayerAssist_Id'].'</option>';
            $select3.='<option value="'. $rs['Time']. '">'.$rs['Time'].'</option>';
        }
    }
    $select1.='</select>';
    $select2.='</select>';
    $select3.='</select>';

    echo $select1; echo $select2; echo $select3;
    echo("<br>. <br>");

    
?>

<input type="submit" name="submit" value="Submit">
</form>

</html>