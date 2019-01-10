<?php
session_start();
if($_SESSION["login"] == false) {
	
   header("Location: /Eitan/index.php"); die();
}
?>
 <html>
 <head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="index.css">
 <title>Eitan's Music / Streaming Website</title>
 </head>
 <body>

 <?php echo file_get_contents('https://www.anneyaelrege.uk/Eitan/navbar.html'); ?>
 
 <?php echo file_get_contents('https://www.anneyaelrege.uk/Eitan/Music/Song/Asphyxia/Asphyxia.html'); ?>

 </body>
</html>
 
