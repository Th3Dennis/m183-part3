<?php
include "./model/Database.php";


function getProducts()
{

    $conn = db_connect();

    $sql = "SELECT * FROM job";

    $result = $conn->query($sql) ->fetch_all(MYSQLI_ASSOC);

    return $result;
}


function getProductById($id)
{
    $conn = db_connect();
    $sql = "SELECT * from job where id = $id";

    $stmt = mysqli_prepare($conn, $sql);

    $result = $conn->query($sql);

    return mysqli_fetch_array($result);

}
