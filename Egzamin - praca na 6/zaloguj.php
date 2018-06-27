<?php
    session_start();
    
    require_once "connect.php";

    $polaczenie = new mysqli($host,$login,$password,$db);

   
    if($polaczenie->connect_errno>0)
    {
        echo "Error: ".$connect->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        
        $logowanie = "SELECT * FROM hasla WHERE login='$login' AND haslo='$haslo1';";
        
        $rezultat = $polaczenie->query($logowanie);
        $uzytkownik = $rezultat->num_rows;
        if($uzytkownik>0)
        {
            $_SESSION['zalogowany']=true;
            $rekord = $rezultat->fetch_assoc();
            $_SESSION['login'] = $rekord['login'];
            $_SESSION['haslo'] = $rekord['haslo'];
            $_SESSION['zalogowano']='<span style="color:green;">Zalogowano!</span>';
            unset($_SESSION['blad']);
            
            $rezultat->free_result();
        }
        else
        {
            $_SESSION['blad'] = '<span style="color:red;">Nieprawidłowy login lub hasło</span>';
            unset($_SESSION['zalogowano']);
        }
        
    }
 

    if(isset($_POST['haslo2']))
    {

        
        $ok=true;

        $nick = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];

        $select = "SELECT * FROM hasla WHERE login='$nick';";

        $rezultat = $polaczenie-> query($select);
        $ile = $rezultat->num_rows;
        if($ile>0)
        {
            $ok=false;
            $_SESSION['jest'] = "W bazie jest juz taki login";
            unset($_SESSION['hasla']);
        }
        if($haslo1!=$haslo2)
        {
            $ok=false;
            $_SESSION['hasla'] = "Hasla nie są identyczne";
            unset($_SESSION['jest']);
        }
        if($ok==true)
        {
            $insert = "INSERT INTO hasla VALUES(NULL,'$nick','$haslo1');";
            $rezultat = $polaczenie -> query($insert);
            $_SESSION['zarejestrowano']= '<span style="color:green;">Zarejestrowano!</span>';
            
        }
        
        
        header('location:logowanie.php');
        $rezultat->free_result();
    }
$polaczenie->close();
?>

