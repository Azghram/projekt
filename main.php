<?php
	session_start();
	
	if(!isset($_SESSION['logged'])) ///Sprawdzenie czy po przejściu na stronę user jest zalogowany
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
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Wybór akcji</title>
</head>

<body>
<div class="z1">
<div class="z2">
<?php

	echo "<p>Witaj ".$_SESSION['name'].' ! [<a href="logout.php"> Wyloguj się !</a>]</p>';
?>
</div>
<div class="z2">	
	Co chcesz zrobić ?
	<br /><br />
	<div class="z3">
		<a href="head.php">Wyszukaj słowa runiczne</a>
	</div>
	<div class="z3">
		<a href="przedmioty.php">Wyszukaj przedmioty</a>
	</div>
	
</div>
</div>

</body>
</html>
