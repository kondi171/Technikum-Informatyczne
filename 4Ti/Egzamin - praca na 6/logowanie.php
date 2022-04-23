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
           <div id="log">
                <div class="table">Login</div>
                <div class="table">Hasło</div>
                <div class="table">Powtórz Hasło</div>
                <div class="table">Potwierdź</div>
               <form method="post" action="zaloguj.php">
                   <input type="text" name="login">
                   <input type="password" name="haslo1">
                   <input type="password" name="haslo2">
                   <input type="submit" id="button-zaloguj" value=zaloguj>
                   <input type="submit" value="zarejestruj">
                </form>
               
                    
               
               <br>
               <span style="margin-left:5px;">Komunikat informujacy o sukcesie logowania, rejestracji lub zmianie hasła:
               <?php
                 if(isset($_SESSION['zalogowany'])) echo $_SESSION['zalogowano'];   
                 if(isset($_SESSION['blad']))
                 {
                     if(isset($_SESSION['zarejestrowano'])) echo $_SESSION['zarejestrowano'];
                     else echo $_SESSION['blad'];
                 }

                ?>
               </span>
               <div class="color-table">Wpisz dane i wciśnij odpowiedni przycisk</div>
            </div>
            <div id="text">
            <ul>
                <li>Aby się zalogowac wpisujesz <span style="color:#569f43;">login</span> oraz <span style="color:green;">hasło</span> i wciskasz <span style="color:#569f43;">zaloguj</span></li>    
                <li>Aby się wylogować wciskasz <span style="color:#569f43;">wyloguj</span></li>    
                <li>Jeżeli jesteś nowym użytkownikiem, wpisujesz <span style="color:#569f43;">login</span> oraz dwukrotnie <span style="color:#569f43;">hasło</span> - w polu hasło oraz powtórz hasło i wciskasz <span style="color:#569f43;">zarejestruj</span></li>    
                
            </ul>
                
            </div>
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
