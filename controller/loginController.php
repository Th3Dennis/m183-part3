<?php
if(session_status() === 1){
    session_start();
}
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];



require "DatabaseController.php";

$html_Output = null;

$_SESSION['errorMessage'] = "";


// Prüfe Inhalt von Eingabe  
if (isset($email) && isset($password)){
    if (verifyLogin($email, $password)){
        $_SESSION['email'] = $email;
        $_SESSION['loggedIn'] = true;
        header("Location: ../detailPage.php");
    } else{
        $_SESSION['errorMessage'] = "E-Mail oder Passwort falsch.";
        header("Location: ../login.php");
    }
} else {
    $_SESSION['errorMessage'] = "E-Mail oder Passwort falsch.";
    header("Location: ../login.php");
}
