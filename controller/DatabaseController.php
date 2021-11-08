<?php
if (file_exists("../model/Database.php")) {
    include "../model/Database.php";
} else if (file_exists("./model/Database.php")) {
    include "./model/Database.php";
}

function getProducts()
{

    $conn = db_connect();

    $sql = "SELECT * FROM job";

    $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

    return $result;
}

function verifyLogin($email, $password)
{
    $conn = db_connect();
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        return false;
    }
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        return true;
    }

    $conn->close();
    return false;
}


function register($email, $password)
{
    $conn = db_connect();
    $sql = "SELECT * from user WHERE email='$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['registerErrorMessage'] = 'Email already exists';
        return false;
    }

    $sql = 'INSERT INTO user(email, password) VALUES (?, ?)';

    $stmt = mysqli_prepare($conn, $sql);

    if (false === $stmt) {
        echo mysqli_error($conn);
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, 'ss', $email, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            return true;
        } else {
            return false;
        }
    }

    $conn->close();
    return true;
}


function getProductById($id)
{
    $conn = db_connect();
    $sql = "SELECT * from job where id = $id";

    $result = $conn->query($sql);

    return mysqli_fetch_array($result);
}

function acceptJob($jobId, $userEmail)
{

    $conn = db_connect();
    $sql = "UPDATE job SET jobAceptor=$userEmail WHERE id=$jobId";

    $result = $conn->query($sql);
    return mysqli_fetch_array($result);
}
