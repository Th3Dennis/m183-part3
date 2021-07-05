<?php
if (isset($_SESSION['loggedIn'])) {

    if(!$_SESSION['loggedIn']){
        header("Location: ./Login.php");
    }

} else{
    header("Location: ./Login.php");
}


?>