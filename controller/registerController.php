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

    require "./DatabaseController.php";
    $log = '';

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
            $log = writeLog(true, $_REQUEST['email']);

        } else {
            header('Location: ../Register.php');
            $log = writeLog(false, $_REQUEST['email']);

        }
    } else {
        $_SESSION['registerErrorMessage'] = 'Passwords doesnt match';
        header('Location: ../Register.php?email=' . $_REQUEST['email']);
        $log = writeLog(false, $_REQUEST['email']);
    }
    file_put_contents('../logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);

} else {
    $_SESSION['registerErrorMessage'] = 'More Parameter required';
    header('Location: ../Register.php?email=' . $_REQUEST['email']);
}


}

function writeLog($status, $email){
    return "Register".PHP_EOL.
        "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Attempt: ".($status ==true?'Success':'Failed').PHP_EOL.
        "Email: ".$email.PHP_EOL.
        "-------------------------".PHP_EOL;
}
