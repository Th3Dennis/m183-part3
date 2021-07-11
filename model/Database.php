<?php

function db_connect()
{
    $db_host = '51.15.13.170';
    $db_name = 'chillihero_120';
    $db_user = 'chillihero_120';
    $db_pass = 'L13s8Zxj2JKH';


    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}

?>
