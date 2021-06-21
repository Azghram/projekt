<?php

	session_start();
	
	if(isset($_POST['email']))
	{
		$all_OK=true;
		$nick = $_POST['nick'];
		
		if((strlen($nick)<3) || (strlen($nick)>12))
		{
			$all_OK=false;
			$_SESSION['e_nick']="Nazwa użytkownika musi posiadać od 3 do 12 znaków";
		}
		
		if(ctype_alnum($nick)==false)
		{
			$all_OK=false;
			$_SESSION['e_nick']="Nazwa użytkownika może składać się tylko z liter i cyfr, bez użycia polskich znaków";
		}
		
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false)||($emailB!=$email))
		{
			$all_OK=false;
			$_SESSION['e_email']="Sprawdź poprawność adresu e-mail";
		}
		
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if((strlen($haslo1)<8)||(strlen($haslo1)>15))
		{
			$all_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 15 znaków";	
			
		}
		
		if($haslo1!=$haslo2)
		{
			$all_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są takie same";				
		}
		
		
		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		if(!isset($_POST['regulamin']))
		{
			$all_OK=false;
			$_SESSION['e_regulamin']="Potwierdź regulamin";				
		}	

		$secret = "6LdbpUobAAAAAEs33dx9Tql3lf3vlB56KVld5qXD";

		$check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);	
	
		$answear = json_decode($check);
		
		if($answear->success==false)
		{
			$all_OK=false;
			$_SESSION['e_captcha']="Potwierdź, że nie jesteś botem";				
		}			
		
		require_once "conn.php";
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}	
			else
			{
				$result = $polaczenie->query("SELECT id FROM users WHERE email='$email'");
				
				if(!$result)throw new Exception($polaczenie->error);
				$how_many_mails = $result->num_rows;
				if($how_many_mails>0)
				{
					$all_OK=false;
					$_SESSION['e_email']="Istnieje konto z tym adresem e-mail";				
				}					
				
				$result = $polaczenie->query("SELECT id FROM users WHERE name='$nick'");
				
				if(!$result)throw new Exception($polaczenie->error);
				$how_many_nicks = $result->num_rows;
				if($how_many_nicks>0)
				{
					$all_OK=false;
					$_SESSION['e_nick']="Istnieje konto z wprowadzoną nazwą";				
				}

				if($all_OK==true)
				{
					if($polaczenie->query("INSERT INTO users VALUES (NULL, '$nick','$haslo_hash', '$email', 'normal')"))
					{
						$_SESSION['regcompleted']=true;
						header('Location: welcome.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				
				$polaczenie->close();
			}

			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera, spróbuj później</span>';
			echo '<br /> Info: '.$e;
		}
		
	}
	
	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tytuł - załóż konto</title>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	 
	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	
	
	</style>
 
</head>

<body>
	
	<form id=login_form method="post">
	
		Username: <br /><input type="text" name="nick" /><br />
		
		<?php
		
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		
		?>
		
		E-mail: <br /><input type="text" name="email" /><br />
		
		<?php
		
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		
		?>		
		
		Hasło: <br /><input type="password" name="haslo1" /><br />
		
		<?php
		
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		
		?>		
		
		Powtórz hasło: <br /><input type="password" name="haslo2" /><br />
		
		<label>
		<input type="checkbox" name="regulamin" /> Akceptacja regulaminu
		</label>
		
		<?php
		
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		
		?>		
		
		
		<br />
		
		<div class="g-recaptcha" data-sitekey="6LdbpUobAAAAAKkKUpFdOzCUKVr2sXsUcS1hX3LK"></div>
		
		<?php
		
			if (isset($_SESSION['e_captcha']))
			{
				echo '<div class="error">'.$_SESSION['e_captcha'].'</div>';
				unset($_SESSION['e_captcha']);
			}
		
		?>		
		
		<br />
		
		<input type="submit" value="Zarejestruj się" />
		

	</form>

</body>

</html>