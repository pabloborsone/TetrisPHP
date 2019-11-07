<?php
session_start();
require_once __DIR__ . "/genericDAO.php";

class MatchesDAO extends GenericDAO{

	function registerMatch($score, $level) {
		$sql = "insert into gametetris.matches(UserId, Score, Level) values('{$_SESSION['userId']}','{$score}','{$level}')";
		$conn = $this->databaseAccess();
		$conn->query($sql);
	}
}
?>
