<?php
if (session_status() === 1) {
    session_start();
}

require "./reCaptcha.php";

$recaptcha = $_POST['g-recaptcha-response'];
$res = reCaptcha($recaptcha);
if (!$res['success']) {
    header("Location: ../Register.php");
} else {

    include 'DatabaseController.php';

    if (
        isset($_REQUEST['email']) &&
        isset($_REQUEST['password']) &&
        isset($_REQUEST['passwordConfirm'])
    ) {
        if ($_REQUEST['password'] == $_REQUEST['passwordConfirm']) {
            if (register($_REQUEST['email'], $_REQUEST['password'])) {
                $_SESSION['email'] = $_REQUEST['email'];
                $_SESSION['errorMessage'] = '';
                header('Location: ../Login.php');
            } else {
                header('Location: ../Login.php');
            }
        } else {
            $_SESSION['errorMessage'] = 'Passwörter stimmen nicht überein';
            header('Location: ../Register.php?email=' . $_REQUEST['email']);
        }
    } else {
        $_SESSION['errorMessage'] = 'Mehr Parameter benötigt';
        header('Location: ../Register.php?email=' . $_REQUEST['email']);
    }
}
