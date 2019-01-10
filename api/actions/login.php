<?php
require_once '../config/auth.php';

$username = $_POST["username"];
$password = $_POST['password'];

login($username, $password);

header('Location: /book/dashboard.php');
?>