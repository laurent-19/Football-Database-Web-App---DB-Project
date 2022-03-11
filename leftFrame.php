<?php

require "init.php";

session_start(); 
$usr = $_SESSION["usr"];

# verify is the account is Admin, if not, send the user to an info page
$sql = "SELECT users_admins.ID FROM users_admins Where users_admins.Name = '$usr' ";
$result = $con-> query($sql);

if ($result-> num_rows > 0){
    if($result-> fetch_assoc()['ID'] == 2){
        header("Location: leftFrameUser.html");
        exit;
    } else {
        header("Location: leftFrameAdmin.html");
        exit;
    }
}

?>