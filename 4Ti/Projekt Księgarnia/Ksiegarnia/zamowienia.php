<!DOCTYPE HTML>
<html lang="PL">
<head>
	<meta http-equiv="content-type">
    <meta content="text/html">
    <meta charset="utf-8"> 
    <meta author="Konrad Nowak">
    <link href="style/main.css" rel="stylesheet">
    <title>Zamowienia</title>
</head>
    
<body>
    <h1 class="zamowienie">Zamowienia</h1>
    
 <center>  
     <table style="background: #4130c6;">
<td style="width:100px;padding:10px;">idzamowienia</td>
<td style="width:100px;padding:10px;">idklienta</td>
<td style="width:100px;padding:10px;">idksiazki</td>
<td style="width:200px;padding:10px;">data</td>
<td style="width:200px;padding:10px">status</td>
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
                 $zapytaniezamowienia = $_POST['sql'];
             }
            else
            {
                $zapytaniezamowienia = "SELECT * FROM zamowienia"; 
            }
              
            
            $rezultat = mysqli_query($polaczenie, $zapytaniezamowienia) or die('<center><span class="die">Błąd w zapytaniu!</span></center>');
            $ile = mysqli_num_rows($rezultat);
            echo '<div class="find">Znaleziono: '.$ile.'</div>';
            
    
	for ($i = 1; $i <= $ile; $i++) 
	{

		$row = mysqli_fetch_assoc($rezultat);
		$a10 = $row['idzamowienia'];
		$a11 = $row['idklienta'];
		$a12 = $row['idksiazki'];
		$a13 = $row['data'];	
		$a14 = $row['status'];	
echo<<<END
<td style="width:100px;padding:10px;background-color:#e5e5e5;">$a10</td>
<td style="width:100px;padding:10px;background-color:#e5e5e5;">$a11</td>
<td style="width:100px;padding:10px;background-color:#e5e5e5;">$a12</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a13</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a14</td>

</tr><tr>
END;
			
	}
	
?>
        </tr>
    </table>
    <center>
        <form method="post">
    <input id="ibz" type="text" value="SELECT * FROM zamowienia;" name="sql"><br>
    <input id="bz" type="submit" value="Zapytanie">
        </form>
        </center>
        <span class="administrator"><a href="index.php">Powrót do panelu administracyjnego&#8656;</a></span>
</body>
</html>

