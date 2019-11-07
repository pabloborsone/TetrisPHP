
<!DOCTYPE html>
<html>
<body>

<h2>LOGIN</h2>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$error = $_GET['error'];
if($error != null):
	echo "<p> {$error}</p>";
endif;
?>
<form method="POST" action="/View/login.php">
  Username:<br>
  <input type="text" name="username">
  <br>
  Password:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<a href="/View/registerform.php"> <p>Register a new membership</p> </a>

</body>
</html>