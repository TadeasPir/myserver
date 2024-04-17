<?php

require_once "./classes/User.php";
require_once "./classes/DBC.php";


$username = $_POST["username"];
$password = $_POST["password"];

$connection = DBC::getConnection();
$ps = $connection->prepare("INSERT into user (name,password)values(?,?)");
$ps->bind_param("ss", $username, $password);

if (!$ps->execute()) {
    die("Error - " . $connection->error);
}


DBC::closeConnection();

