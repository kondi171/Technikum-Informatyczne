<?php
    session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Wypożycz książki w naszej księgarni">
    <meta name="author" content="Konrad Nowak">
    <meta name="keywords" content="Ksiązki, Wypożyczalnia, załóż konto">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Księgarnia internetowa BOOK-MAX</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>
    <div id="all-divs">
    <div class="left-container"></div>
    <div class="box">
    <header>
        <div id="image">
            <img src="grafika/ksiazki.gif" alt="ksiazki">
        </div>
        <div id="title">
            <h1><a href="index.php">Księgarnia internetowa BOOK-MAX</a></h1>
        </div>
    </header>
    <div class="navigation">
        <nav>
            <div class="option"><a href="index.php">Nasza księgarnia</a></div>
            <div class="option"><a href="logowanie.php">Logowanie</a></div>
            <div class="option"><a href="zakupy.php">Zakupy</a></div>
            <div class="option"><a href="koszyk.php">Twój koszyk</a></div>
        </nav>    
    </div>
    <div class="main">
        <main>
            <div class="login">
                <span>Zalogowany użytkownik: 
                    <?php
                        if(isset($_SESSION['zalogowany'])) 
                        {
                            echo $_SESSION['login'];
                            echo '<button style="float:right; margin-right:3px;"><a href="logout.php" style="color: red;">Wyloguj</a></button>';
                        }
                        else 
                        {
                            echo "brak";
                        }
                        
                    ?>
                </span>
                </div>
                
           
 <?php
             if(!isset($_SESSION['zalogowany']))
            {
                 echo '<span style="color:red; font-size:20px;"><center>Musisz najpierw się zalogować!</center></span>';
            }
            else
            {
            echo '<table align="center" border="1" bordercolor="#d5d5d5"  cellpadding="0" cellspacing="0">
        <tr>';
            require_once "connect.php";
            $polaczenie = mysqli_connect($host, $login, $password);
			mysqli_query($polaczenie, "SET CHARSET utf8");
			mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
            mysqli_select_db($polaczenie, $db);
            
                   $zapytanie = "SELECT * FROM ksiazki;";
    
            
            $rezultat = mysqli_query($polaczenie, $zapytanie) or die('<center><span class="die">Błąd w zapytaniu!</span></center>');
            $ile = mysqli_num_rows($rezultat);

echo<<<END
<td><b>Tytuł</b></td>
<td><b>Autor</b></td>
<td><b>ISBN</b></td>
<td><b>Cena(zł)</b></td>
<td><b>Stan(sztuk)</b></td>
<td><b>Kupuje</b></td>
<td><b>Sztuk</b></td>
<tr></tr>
<form action="kup.php" method="post">
END;

		for ($i=0; $i < $ile; $i++)
                { 	
                    $row = $rezultat->fetch_assoc();	
                    $isbn = $row['isbn'];
                    $stan = $row['stan'];
                    $isbnn = $row['isbn']."n";
                    echo "<tr><td>".$row['tytul']."</td>";
                    echo "<td>".$row['autor']."</td>";
                    echo "<td>".$row['isbn']."</td>";
                    echo "<td>".$row['cena']."</td>";
                    echo "<td>".$row['stan']."</td>";
                    echo "<td> <input name='$isbn' id='$isbn' type='checkbox'></td>";
                    echo "<td> <input name='$isbnn' id='$isbnn' type='number' min='0' value='0'></td></tr>";

}
	
	}       
             echo"<br></tr></table>";   
                 echo '<br><input type="submit" value="Wrzuć do koszyka zaznaczone książki"></form>'; 
                    $rezultat->free_result();
            
            
      
            
?>
            <br>
           
        </main>
    </div>
        <footer>
            <span>Copyrights &copy; 2010-2015 Księgarnia internenowa BOOK-MAX</span>
        </footer>
    </div>
    <div class="right-container"></div>
        </div>
</body>
</html>

     