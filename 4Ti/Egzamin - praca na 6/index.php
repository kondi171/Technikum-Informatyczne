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
            <h2>Nasza księgarnia spełni Twoje wszystkie oczekiwania</h2>
           <div id="list">
                <ol>
                    <li>Książki otrzymasz najpóźniej 3 dni po złożeniu zamówienia
                        <ul> 
                            <li>Wysyłka sprawdzoną firmą kurierską</li>
                            <li>Koszt wysyłki to tylko 5 złotych</li>   
                        </ul>
                    </li>
                    <li>Po zakupie 10 książek nie płacisz za kuriera</li>
                    <li>W przypadku uszkodzenia przesyłki zwracamy 100% kosztów, lub bezpłatnie wysyłamy ten sam towar</li>
                    <li>Szeroki wybór - posiadamy aktalnie 2 miliony tytułów!</li>
                </ol>
            </div>
            <div id="gif">
                <img src="grafika/slajd1.png" alt="gif">
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