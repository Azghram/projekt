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

<?php

	echo "<p>Witaj ".$_SESSION['name'].'![<a href="logout.php">Wyloguj się!</a>]</p>';

?>

</body>
</html>