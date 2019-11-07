
<!DOCTYPE html>
<html>
<body>

<h2>REGISTER</h2>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$action = $_GET['action'];
if($action != null):
	echo "<p> {$action}</p>";
endif;

?>
<form method="POST" action="record.php">
	Name:<br>
  <input type="text" name="name">
  <br>
  CPF:<br>
  <input type="text" name="cpf">
  <br>
  Email:<br>
  <input type="text" name="email">
  <br>
  Username:<br>
  <input type="text" name="username">
  <br>
  Password:<br>
  <input type="password" name="password">
  <br>
  Phone:<br>
  <input type="text" name="phone">
  <br>
  Birth Date:<br>
  <input type="date" name="birthdate">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<a href="../index.php"> <p>Login Page</p> </a>

</body>
</html>