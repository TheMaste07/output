
<?php
session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if(isset($_POST["submit"])) {
  $validUser = $_POST["username"] == "TheMaster" && $_POST["password"] == "58Samuel";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else $_SESSION["login"] = true;
}
if($validUser) {
	
   header("Location: /Eitan/home.php"); die();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Eitan Login Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
<center>
<div class="login">
<form name="input" action="" method="post">
	<h1>TheMaster Login</h1>
    <label for="username">Username:</label><input type="text" value="<?= $_POST["username"] ?>" id="username" name="username" />
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
    <div class="error"><?= $errorMsg ?></div>
	
    <input type="submit" value="Let's Go" name="submit" id="submit"/>
</form>
</div>
</body>
</html>