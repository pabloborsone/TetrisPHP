<?php
session_start();
require_once __DIR__ . "/../Classes/userDAO.php";

$dbTeste = new UserDAO();

$username = $_POST['username'];
$password = $_POST['password'];

$dbTeste->verifyUser($username, $password);
?>