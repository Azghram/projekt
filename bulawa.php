<?php
	include_once 'inner.php'	
?>

<?php
	
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
				$result = $polaczenie->query("SELECT * FROM bulawy ");
				$how_many = $result->num_rows;
				if(!$result)throw new Exception($polaczenie->error);
				
				if($how_many>0)
				{
					echo "<table><tr><th>Nazwa</th><th>Minimalne obrażenia</th><th>Maksymalne obrażenia</th><th>Minimalna siła</th><th>Minimalna zręczność</th><th>Liczba gniazd</th></tr>";
					while($row = $result->fetch_assoc()){
						echo "<tr><td>" . $row["Nazwa"]. "</td><td>" . $row["MIN_DMG"]. "</td><td>" . $row["MAX_DMG"]. "</td><td>" . $row["MIN_STR"].  "</td><td>". $row["MIN_DEX"].  "</td><td>" . $row["Gniazda"].  "</td></tr>";
					}
					echo "</table>";
				}
				else
				{
					echo '<span style="color:red;">Brak wyników</span>';
				}
			}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera, spróbuj później</span>';
			echo '<br /> Info: '.$e;
		}

			$polaczenie->close();
?>

<?php
	include_once 'footer.php'
?>