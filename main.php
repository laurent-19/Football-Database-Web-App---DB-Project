<HTML>
<HEAD>
<TITLE>Main Page</TITLE>

</HEAD>

<FRAMESET COLS="20%, 60%, 20%">
 <FRAME NAME="left_frame" SRC="leftFrame.php">
 <FRAME NAME="middle_frame" SRC="middleFrame.html">
 <FRAME NAME="right_frame" SRC="rightFrame.php">
</FRAMESET>


<?php

if(isset($_POST['submit'])){
session_start(); 
$usr = $_SESSION["usr"];
$password = $_SESSION["pwd"];

session_start(); # sending the username to rightFrame
$_SESSION["usr"] = $username;
$_SESSION["pwd"] = $password;

}

?>



</HTML>