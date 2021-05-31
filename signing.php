<?php
  session_start();
  
  require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Stajnia "Jeździectwo" Poznań </title>
  </head>
  <body>

    <link rel="stylesheet" href="./style.css" type="text/css">

    <div id="container">

      <div class="header">
      </div>

      <div class="navi">

        <table>

        <td>
          <a href="./main.php">
            <div class="actual">
             Strona Główna
            </div>
          </a>
        </td>

        <td>
          <a href="./actual.php">
            <div class="actual">
               Aktualności
            </div>
          </a>
        </td>

        <td>
          <a href="./offer.php">
            <div class="actual">
              Oferta
            </div>
          </a>
        </td>

        <td>
          <a href="./kadra.php">
            <div class="actual">
              Kadra
            </div>
          </a>
        </td>

        <td>
          <a href="./camps.php">
            <div class="actual">
               Obozy jeździeckie
            </div>
          </a>
        </td>

        <td>
          <a href="./contact.php">
            <div class="actual">
               Kontakt
            </div>
          </a>
        </td>

        <td>
          <a href="./signing.php">
            <div class="actual">
               Logowanie
            </div>
          </a>
        </td>

        </table>

      </div>
    <div class="background">
      <div class="mainpage">
        <h3>Logowanie</h3>

        <br><br>

        <form action="signing.php" method="post">

        <b>Login:</b>
        <input type="text" name="login" placeholder="Wprowadź login">

        <br>

        <b>Hasło:</b>
        <input type="password" name="password" placeholder="Wprowadź hasło">

        <br>

        <input type="submit" name="submit" value="Zaloguj" name="loguj">

        <br><br>

          Nie masz konta?
        <a href="./registered.php">Zarejestruj się</a>
        <br><br><br>

        </form>

        <?php

    $login = $_POST['login'];
    $password = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $passwd = md5($password);
    
if(!$connect->connect_errno) {

       $sql = "SELECT * FROM `clients` WHERE `id` = 3";
       
       $result = $connect -> query($sql);

    } else {

     echo "Błędne połączenie z bazą danych!";
    }

      while($clients = $result -> fetch_Assoc()) {

        if($login == "$clients[login]" && $passwd == "$clients[haslo]" ) {
          
          $_SESSION['zalogowany'] = true;
          $_SESSION['login'] = $login;

          $sql = "UPDATE `clients` SET (`logowanie` = '".time().", `ip` = '".$ip."'') WHERE `login` = '".$login."';";
          ?>
          <script> alert('Pomyślnie zalogowano!')</script>
          <?php
            header('location: ./main.php');

      } else {
?>
    <script> alert('Nie udało się zalogować!')</script>;
    <script>history.back()</script>;
    <?php
    exit();

  } 
}
    
?>

        <a href="./main.php">
          Powrót do strony głównej
        </a>
      </div>

    </div>
      <div class="footer">
        Autor: Eryk Sowacki | Copyright © | ZSŁ POZNAŃ PROJEKT APLIKACJE
      </div>

    </div>

  </body>
</html>