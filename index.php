<?php 
if(!isset($_SESSION))
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
</head>
<body>
	<?include('header.php')?>
	<li><a href="app/validate.php?hdx=../header.php">Click to login</a></li>
</body>
</html>