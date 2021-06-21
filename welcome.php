<?php

	session_start();
	
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
	<title>Tytuł</title>
</head>

<body>
	Rejestracja przebiegła pomyślnie. Zaloguj się na swoje konto.<br /><br />
	
	<a href="index.php">Zaloguj się</a>
	<br /><br />

</body>
</html>