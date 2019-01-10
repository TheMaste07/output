<?php
session_start();
if($_SESSION["login"] == false) {
	
   header("Location: /Eitan/index.php"); die();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="home.css">
  <title>Eitan's Website</title>
 </head>
 <body>
<?php echo file_get_contents('https://www.anneyaelrege.uk/Eitan/navbar.html'); ?>

 </body>
</html>

