<?php

	session_start();
	
	if(isset($_SESSION['logged'])&&($_SESSION['logged']==true))
	{
		header('Location: main.php');
		exit();
	}
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Strona logowania</title>
</head>

<body>
<div class="z1">
	Witaj<br /><br />
	
	<a href="rejestracja.php">Zarejestruj się</a>

	<br /><br />
	
	<form action="log.php" method="post">

		Login: <br /> <input type="text" name="login" /> <br />

		Hasło: <br /> <input type="password" name="haslo" /> <br /> <br />

		<input type="submit" value="Zaloguj się" />

	</form>
</div>

<?php
	if(isset($_SESSION['blad']))
		echo $_SESSION['blad'];
?>

</body>
</html>