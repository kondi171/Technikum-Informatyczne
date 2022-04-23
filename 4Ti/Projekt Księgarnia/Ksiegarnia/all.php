<!DOCTYPE HTML>
<html lang="PL">
<head>
	<meta http-equiv="content-type">
    <meta content="text/html">
    <meta charset="utf-8"> 
    <meta author="Konrad Nowak">
    <link href="style/main.css" rel="stylesheet">
    <title>Database</title>
</head>
    
<body>
    <h1 class="nwm">BAZA DANYCH</h1>
    <table width="1000" align="center" border="1" bordercolor="#d5d5d5"  cellpadding="0" cellspacing="0">
        <tr>
        <?php
            ini_set("display_errors", 0);
            require_once "dbconnect.php";
            $polaczenie = mysqli_connect($host, $user, $password);
			mysqli_query($polaczenie, "SET CHARSET utf8");
			mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
            mysqli_select_db($polaczenie, $database);
            
            if(isset($_POST['sql']))
               {
                  $zapytanieall = $_POST['sql'];
               }
            else
               {
                   $zapytanieall = "SELECT * FROM klienci;";
               }
            
            $rezultat = mysqli_query($polaczenie, $zapytanieall) or die('<center><span class="die">Błąd w zapytaniu!</span></center>');
            $ile = mysqli_num_rows($rezultat);
            
            echo '<span class="find">Znaleziono:'.$ile.'</span>';

echo<<<END
<td>idklienta</td>
<td>imie</td>
<td>nazwisko</td>
<td>miejscowosc</td>
<td>idksiazki</td>
<td>imieautora</td>
<td>nazwiskoautora</td>
<td>tytul</td>
<td>cena</td>
<td>idzamowienia</td>
<td>data</td>
<td>status</td>
</tr><tr>
END;

	for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($rezultat);
		$a1 = $row['idklienta'];
		$a2 = $row['imie'];
		$a3 = $row['nazwisko'];
		$a4 = $row['miejscowosc'];
		$a5 = $row['idksiazki'];
		$a6 = $row['imieautora'];
		$a7 = $row['nazwiskoautora'];
		$a8 = $row['tytul'];
		$a9 = $row['cena'];
		$a10 = $row['idzamowienia'];
		$a11 = $row['data'];	
		$a12 = $row['status'];			
		
echo<<<END
<td style="width:100px;padding:10px;background-color:green;">$a1</td>
<td style="width:100px;padding:10px;background-color:green;">$a2</td>
<td style="width:100px;padding:10px;background-color:green;">$a3</td>
<td style="width:100px;padding:10px;background-color:green;">$a4</td>
<td style="width:100px;padding:10px;background-color:maroon;">$a5</td>
<td style="width:100px;padding:10px;background-color:maroon;">$a6</td>
<td style="width:100px;padding:10px;background-color:maroon;">$a7</td>
<td style="width:100px;padding:10px;background-color:maroon;">$a8</td>
<td style="width:100px;padding:10px;background-color:maroon;">$a9</td>
<td style="width:100px;padding:10px;background-color:#4130c6;">$a10</td>
<td style="width:100px;padding:10px;background-color:#4130c6;">$a11</td>
<td style="width:100px;padding:10px;background-color:#4130c6;">$a12</td>

</tr><tr>
END;
			
	}
	

?>


</tr></table>
<center>
        <form method="post">
    <input style="width:100%;" id="ali" type="text" value="SELECT * FROM zamowienia;" name="sql"><br>
    <input id="alil" type="submit" value="Zapytanie">
        </form>
        </center>
        <span class="administrator"><a href="index.php">Powrót do panelu administracyjnego&#8656;</a></span>


</body>
</html>

