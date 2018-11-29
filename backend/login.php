<?php

require_once 'auth.php';


$email = $_POST["inputEmail"];
$password = $_POST["inputPassword"];

login($email, $password) && header('Location: /book/dashboard.php');
exit();

?>