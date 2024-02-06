<?php


session_start();

include("usersrepository.php");
include("../database/databaseConnection.php");
$dbConnection = new DatabaseConnection();
$conn = $dbConnection->startConnection();

$user = new UsersRepository($conn);

$user->logout();

header("Location: login.php");
exit();
?>