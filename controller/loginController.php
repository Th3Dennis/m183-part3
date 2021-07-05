<?php 
session_start();

//Include logic here


$_SESSION['loggedIn'] = true;

header("Location: ../Overview.php");

?>