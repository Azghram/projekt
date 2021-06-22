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
				$result = $polaczenie->query("SELECT * FROM zbroje");
				$how_many = $result->num_rows;
				if(!$result)throw new Exception($polaczenie->error);
				
				if($how_many>0)
				{
					echo "<table><tr><th>Nazwa</th><th>Minimalna obrona</th><th>Maksymalna obrona</th><th>Minimalna siła</th><th>Wytrzymałość</th><th>Liczba gniazd</th></tr>";
					while($row = $result->fetch_assoc()){
						echo "<tr><td>" . $row["Nazwa"]. "</td><td>" . $row["MIN_DEF"]. "</td><td>" . $row["MAX_DEF"]. "</td><td>" . $row["MIN_STR"].  "</td><td>". $row["DUR"].  "</td><td>" . $row["Gniazda"].  "</td></tr>";
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