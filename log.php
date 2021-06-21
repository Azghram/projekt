<?php
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "conn.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];	
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		

		
		if ($result = @$polaczenie->query(
		sprintf("SELECT * FROM users WHERE name='%s'", 
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$liczba_userow = $result->num_rows;
			if($liczba_userow>0)
			{
				$wiersz = $result->fetch_assoc();

				if(password_verify($haslo, $wiersz['pass']))
				{
				
					$_SESSION['logged'] = true;
					

					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['name'] = $wiersz['name'];
					
					unset($_SESSION['blad']);
					$result->close();
					header('Location: main.php');
				}
				else
				{
					$_SESSION['blad']= '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: index.php');
			
		
				}
			}
			else
			{
				$_SESSION['blad']= '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
			
		
			}
		}
	
		$polaczenie->close();
	}

?>