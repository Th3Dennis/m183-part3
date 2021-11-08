<?php

function db_connect()
{
    $db_host = '34.66.115.29';
    $db_name = 'm183';
    $db_user = 'root';
    $db_pass = 'root';


    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}

?>
