<?php 
if(!isset($_SESSION))
    session_start();
if(!isset($_SESSION['user']))
    header("Location: validate.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hooray you successfuly logged-in! <?=$_SESSION['user']?></h1>

    <img src="Coca_Cola-light_Logo.jpg" alt="Simply Easy Learning" width="200" height="150">
</body>
</html>