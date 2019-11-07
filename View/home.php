<?php
session_start();
require_once __DIR__ . "/../Classes/matchesDAO.php";
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if ( isset( $_SESSION['logged'] ) ) {
  $match = new MatchesDAO();
  $match->registerMatch(0, 0);
} else { 
     header('Location: ../index.php?error=please+login');
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>TETRIS</h2>

</body>
</html>