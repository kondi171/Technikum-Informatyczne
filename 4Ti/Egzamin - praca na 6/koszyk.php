<?php
    session_start();
    require_once "connect.php";
    $polaczenie = new mysqli($host,$login,$password,$db);
    $koszyk = "SELECT * FROM ksiazki;";
    $rezultat = $polaczenie->query($koszyk) or die ('<center><span class="die">Błąd w zapytaniu!</span></center>');
            mysqli_query($polaczenie, "SET CHARSET utf8");
			mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    $ile = mysqli_num_rows($rezultat);
    $wynik=0;
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
            <div class="koszyk">
            <?php
            if(!isset($_SESSION['zalogowany']))
            {
                 echo '<span style="color:red; font-size:20px;"><center>Musisz najpierw się zalogować!</center></span>';
            }
            else
            {
                ?>
                <table border="1" align="center" cellpading="5">
<td><b>Tytuł</b></td>
<td><b>Autor</b></td>
<td><b>ISBN</b></td>
<td><b>Cena(zł)</b></td>
<td><b>Stan(sztuk)</b></td>
<td><b>Kupuje</b></td>
<tr></tr>
                    
            <?php

                for ($i=0; $i <= $ile; $i++)
                { 	
                    $row = $rezultat->fetch_assoc();
                    $isbn=$row['isbn'];
                    if(isset($_SESSION[$isbn]) && $_SESSION[$isbn]==1 && $_SESSION[$isbn."n"]>0)
                    {
                                $sum=$_SESSION[$isbn."n"]*$row['cena'];
                                echo "<tr><td>".$row['tytul']."</td>";
                                echo "<td>".$row['autor']."</td>";
                                echo "<td>".$row['isbn']."</td>";
                                echo "<td>".$row['cena']."</td>";
                                echo "<td>".$_SESSION[$isbn."n"]."</td>";
                                echo "<td>".$sum."</td></tr>";
                                $wynik=$wynik+$sum;
		                      }
                            }
                    
                



                echo "</table>";
                echo "<br><center><span>Suma towarów wynosi: ".$wynik."zł</span></center><br>";
            }
?>
                </table>
            </div>
            <center>
            <div id="panel">
            <form id="form" name="form" method="POST">
                <input id="kup" name="kup" type="submit" value="Zamów"
                onclick="document.getElementById('form').action='zamow.php';"><br><br>
                <input id="kasuj" name="kasuj" type="submit" value="Usuń ostatni towar" onclick="document.getElementById('form').action='kasuj.php';">

</form>
                
                </div>
                </center>
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
