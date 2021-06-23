<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>PRZEDMIOTY</title>
	
	<link rel="stylesheet" href="style.css" type="text/css"/>
	
</head>

<?php
        $wartosci = $_POST['runa'];

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
                foreach($wartosci as $opcje)
                {
                    $result = $polaczenie->query("SELECT * FROM slowa WHERE Runy LIKE '%$opcje%'");
                }                
                
				$how_many = $result->num_rows;
				if(!$result)throw new Exception($polaczenie->error);
				
				if($how_many>0)
				{
					echo "<table><tr><th>Nazwa</th><th>Wymagane runy</th><th>Opis</th><th>Wymagany przedmiot</th></tr>";

					while($row = $result->fetch_assoc()){
						echo "<tr><td>" . $row["Nazwa"]. "</td><td>" . $row["Runy"]. "</td><td>" . $row["Opis"]. "</td><td>" . $row["Item"]. "</td></tr>";
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