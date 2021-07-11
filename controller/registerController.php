<?php
session_start();

include 'DatabaseController.php';

if (
    isset($_REQUEST['email']) &&
    isset($_REQUEST['password']) &&
    isset($_REQUEST['passwordConfirm'])
) {
    if ($_REQUEST['password'] == $_REQUEST['passwordConfirm']) {
        if (register($_REQUEST['email'], $_REQUEST['password'])) {
            $_SESSION['email'] = $_REQUEST['email'];
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
