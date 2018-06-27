<!DOCTYPE HTML>
<html lang="PL">
<head>
	<meta http-equiv="content-type">
    <meta content="text/html">
    <meta charset="utf-8"> 
    <meta author="Konrad Nowak">
    <link href="style/main.css" rel="stylesheet">
    <title>Klienci</title>
</head>
    
<body>
    <h1>Klienci</h1>
    
 <center>  
     <table style="background: green;">
<td style="width:100px;padding:10px;">idklienta</td>
<td style="width:200px;padding:10px;">imie</td>
<td style="width:200px;padding:10px;">nazwisko</td>
<td style="width:200px;padding:10px;">miejscowosc</td>
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
                 $zapytanieklienci = $_POST['sql'];
                
             }
            else
            {
                $zapytanieklienci = "SELECT * FROM klienci"; 
            }
              
            
            $rezultat = mysqli_query($polaczenie, $zapytanieklienci) or die('<center><span class="die">Błąd w zapytaniu!</span></center>');
            $ile = mysqli_num_rows($rezultat);
            echo '<div class="find">Znaleziono: '.$ile.'</div>';
            
    
	for ($i = 1; $i <= $ile; $i++) 
	{

		$row = mysqli_fetch_assoc($rezultat);
		$a1 = $row['idklienta'];
		$a2 = $row['imie'];
		$a3 = $row['nazwisko'];
		$a4 = $row['miejscowosc'];	
echo<<<END
<td style="width:100px;padding:10px;background-color:#e5e5e5;">$a1</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a2</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a3</td>
<td style="width:200px;padding:10px;background-color:#e5e5e5;">$a4</td>

</tr><tr>
END;
			
	}
	

?>
        </tr>
    </table>
    <center>
        <form method="post">
    <input type="text" value="SELECT * FROM klienci;" name="sql"><br>
    <input type="submit" value="Zapytanie">
        </form>
        </center>
        <span class="administrator"><a href="index.php">Powrót do panelu administracyjnego&#8656;</a></span>
</body>
</html>

