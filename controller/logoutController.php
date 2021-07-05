<?php 
session_start();

//Include logic here


$_SESSION['loggedIn'] = false;

header("Location: ../index.php");

?>