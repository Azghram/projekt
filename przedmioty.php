<?php
	session_start();
	
	if(!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

<?php
	include_once 'inner.php'	
?>

<?php
	include_once 'footer.php'
?>