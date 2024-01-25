<?php

$servername = "localhost";
$db = "gr56";
$username = "root";
$password = " ";

$conn = mysqli_connect($username,$db,$username,$password);

if($conn){
    die("lidhja deshtoi:".mysqli_connect_error());
}
echo "sukses";