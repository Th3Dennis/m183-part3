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
    $log = "";


    require "DatabaseController.php";

    $html_Output = null;

$_SESSION['loginErrorMessage'] = "";

// Prüfe Inhalt von Eingabe  
if (isset($email) && isset($password)) {

    $status = verifyLogin($email, $password);
    if ($status) {
        $_SESSION['email'] = $email;
        $_SESSION['loggedIn'] = true;

        header("Location: ../Overview.php");
    } else {

        $_SESSION['loginErrorMessage'] = "E-Mail oder Passwort falsch.";
        header("Location: ../login.php");
    }

    $log  = writeLog($status, $email);

} else {
    $_SESSION['loginErrorMessage'] = "E-Mail oder Passwort falsch.";
    header("Location: ../login.php");

    $log  = writeLog(false, "");

}

    file_put_contents('../logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);
}

function writeLog($status, $email){
    return "Login".PHP_EOL.
        "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Attempt: ".($status ==true?'Success':'Failed').PHP_EOL.
        "Email: ".$email.PHP_EOL.
        "-------------------------".PHP_EOL;
}

