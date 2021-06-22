<?php
	session_start();
	
	if(!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tytuł</title>
</head>

<body>



	<p>Wybierz typ przedmiotu </p>
	
	<br /><br />
	
	<a href="bron.php">Broń</a> <a href="pancerz.php">Pancerz</a>
	
	<br /><br />
	
	<a href="main.php">Powrót</a>




</body>
</html>