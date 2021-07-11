<?php
//Database connection
include "../model/Database.php";
session_start();


function verifyLogin($email, $password)
{
    $conn = db_connect();
    $sql = "SELECT * from user";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        foreach ($result as $row) {
            if ($row['email'] == $email) {
                if (password_verify($password, $row['password'])) {
                    return true;
                }
            }
        }
    }

    $conn->close();
    return false;
}
?>