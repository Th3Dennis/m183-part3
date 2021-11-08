<?php
require "./reCaptcha.php";

if (session_status() === 1) {
    session_start();
}


$recaptcha = $_POST['g-recaptcha-response'];
$res = reCaptcha($recaptcha);
if (!$res['success']) {
    header("Location: ../Login.php");
} else {


    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];


    require "DatabaseController.php";

    $html_Output = null;

$_SESSION['loginErrorMessage'] = "";

// Prüfe Inhalt von Eingabe  
if (isset($email) && isset($password)) {
    if (verifyLogin($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['loggedIn'] = true;
        header("Location: ../Overview.php");
    } else {
        $_SESSION['loginErrorMessage'] = "E-Mail oder Passwort falsch.";
        header("Location: ../login.php");
    }
} else {
    $_SESSION['loginErrorMessage'] = "E-Mail oder Passwort falsch.";
    header("Location: ../login.php");
}
}



