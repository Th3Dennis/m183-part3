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
            $_SESSION['registerErrorMessage'] = '';
            header('Location: ../overview.php');
        } else {
            header('Location: ../Register.php');
        }
    } else {
        $_SESSION['registerErrorMessage'] = 'Passwords doesnt match';
        header('Location: ../Register.php?email=' . $_REQUEST['email']);
    }
} else {
    $_SESSION['registerErrorMessage'] = 'More Parameter required';
    header('Location: ../Register.php?email=' . $_REQUEST['email']);
}
