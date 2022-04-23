<?php
session_start();

    require_once "connect.php";
    $connect = @new mysqli($host,$login,$password,$db);
    

if(isset($_SESSION['rejlog']) && isset( $_SESSION['rejhas1']) && isset( $_SESSION['rejhas2']))
{
    $sql = "SELECT * FROM hasla WHERE login='$login' AND haslo='$haslo1';";
    $wynik = $connect->query($sql);
    $result = $wynik->num_rows;
        if($wynik==0)
        {
            if(haslo1==haslo2)
            {
                $rejestracja = "INSERT INTO hasla VALUES(NULL,'$login','$haslo1');";
                unset($_SESSION['bladrejestracji'],$_SESSION['istnieje']);
                
                $result->free_result();
            }
            else 
            {
                $_SESSION['bladrejestracji'] = '<span style="color:red;">Hasła nie są takie same!</span>';
            }
                
        }
    else
    {
        $_SESSION['istnieje'] = '<span style="color:red;">Konto jest już w bazie</span';
    }
    
}
header('location:logowanie.php');

    


   $connect->close();
?>
