<?php

	session_start();

	///Warunek sprawdzający czy zmienna sesyjna nie jest ustawiona
	if(!isset($_SESSION['regcompleted']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['regcompleted']);
	}
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Pomyślna rejestracja</title>
</head>

<body>
	<div class="z1">
		<div class="z2">
			Rejestracja przebiegła pomyślnie. <br /> Zaloguj się na swoje konto.<br /><br />
		</div>
		<div class="z3"></div>
		<div class="z3">
		<a href="index.php">Zaloguj się</a>
		</div>
	</div>

</body>
</html>