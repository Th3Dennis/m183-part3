<?php
session_start();
include "../model/Database.php";


function getProducts(){

$conn = db_connect();

$sql = "SELECT * FROM job";

$result = $conn->query($sql);

return $result;


}



?>