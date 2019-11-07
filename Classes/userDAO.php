<?php
session_start();
require_once __DIR__ . "/genericDAO.php";
class UserDAO extends GenericDAO {
	
	function createUser($username, $password, $name, $birth, $phone, $cpf, $email) {
		$sql = "insert into gametetris.user(Nome, Username, Password, Telefone, Nascimento, Email, CPF) values('{$name}','{$username}', MD5 ('{$password}'), '{$phone}','{$birth}' ,'{$email}','{$cpf}')";

		$conn = $this->databaseAccess();
		$conn->query($sql);
	}
	
	
	function verifyUser($user, $password) {
		$conn = $this->databaseAccess();
		$sql = $conn->prepare("SELECT Username, Id, Password FROM user WHERE Username = '{$user}' AND Password = MD5('{$password}')");
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_ASSOC);
		$count = $sql->rowCount();
		if($count > 0) {
			$_SESSION['logged'] = true;
			$_SESSION['userId'] = $result['Id'];
		} else {
			$_SESSION['logged'] = false;
		}
		header('Location:home.php');
	}
}
?>