<?php
include 'usersrepository.php';
include '../database/databaseConnection.php';

$user = new UsersRepository();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = isset($_POST['role']) ? $_POST['role'] : 'user'; // Roli i paracaktuar është 'user'

    $user->insertUser($name, $lname, $phone, $email, $password, $role);
}
?>

