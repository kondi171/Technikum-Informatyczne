<!DOCTYPE HTML>
<html lang="PL">
<head>
	<meta http-equiv="content-type">
    <meta content="text/html">
    <meta charset="utf-8"> 
    <meta author="Konrad Nowak">
    <link href="style/main.css" rel="stylesheet">
    <title>Książki</title>
</head>
    
<body>
    <h1 class="ksiazka">Książki</h1>
    
 <center>  
     <table style="background: maroon;">
<td style="width:100px;padding:10px;">idksiazki</td>
<td style="width:200px;padding:10px;">imieautora</td>
<td style="width:200px;padding:10px;">nazwiskoautora</td>
<td style="width:200px;padding:10px;">tytul</td>
<td style="width:200px;padding:10px;">cena</td>
         </table>
</center> 

    <table align="center" border="1" bordercolor="#d5d5d5"  cellpadding="0" cellspacing="0">
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
                 $zapytanieksiazki = $_POST['sql'];
             }
            else
            {
                $zapytanieksiazki = "SELECT * FROM ksiazki"; 
            }
              
            
            $rezultat = mysqli_query($polaczenie, $zapytanieksiazki) or die('<center><span class="die">Błąd w zapytaniu!</span></center>');
            $ile = mysqli_num_rows($rezultat);
            echo '<div class="find">Znaleziono: '.$ile.'</div>';
            
    
	for ($i = 1; $i <= $ile; $i++) 
	{

		$row = mysqli_fetch_assoc($rezultat);
		$a5 = $row['idksiazki'];
		$a6 = $row['imieautora'];
		$a7 = $row['nazwiskoautora'];
		$a8 = $row['tytul'];	
		$a9 = $row['cena'];	
echo<<<END
<td style="width:100px;padding:10px;background-color:#e5e5e5;">$a5</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a6</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a7</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a8</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a9</td>

</tr><tr>
END;
			
	}
	
?>
        </tr>
    </table>
    <center>
        <form method="post">
    <input id="ibks" type="text" value="SELECT * FROM ksiazki;" name="sql"><br>
    <input id="bks" type="submit" value="Zapytanie">
        </form>
        </center>
        <span class="administrator"><a href="index.php">Powrót do panelu administracyjnego&#8656;</a></span>
</body>
</html>

