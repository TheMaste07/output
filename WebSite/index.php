
<?php
$file_pointer = '/index.html'; 
  
if (file_exists($file_pointer))  
{ 
  header("Location: /index.html"); die();
} 
else 
{ 
  header("Location: /Eitan/home.php"); die();
} 
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
</body>
</html>