<?php
require_once __DIR__ . "/../Classes/userDAO.php";

$dbTeste = new UserDAO();

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$birth = $_POST['birthdate'];
$phone = $_POST['phone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

$dbTeste->createUser($username, $password, $name, $birth, $phone, $cpf, $email);

?>