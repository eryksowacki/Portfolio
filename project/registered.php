<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Stajnia "Jeździectwo" Poznań </title>
  </head>
  <body>

    <link rel="stylesheet" href="./style.css" type="text/css">

    <?php
      require_once './connect.php';
    ?>

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
        <h3>Rejestracja</h3>

        <form action="insert.php" method="post">

          1. <input type="text" name="name" placeholder="Podaj imię:"> <br>
          2. <input type="text" name="surname" placeholder="Podaj nazwisko:"> <br>
          3. <input type="text" name="login" placeholder="Podaj login:"> <br>
          4. <input type="password" name="password" placeholder="Podaj hasło:"> <br>
          5. <input type="password" name="passwd" placeholder="Potwierdź hasło:"> <br>
          6. <input type="date" name="birthdate" placeholder="Podaj datę urodzenia:"> <br>
          7. <input type="text" name="phonenumber" placeholder="Podaj numer telefonu:"> <br>
             <input type="submit" value="Zarejestruj się">

        <br><br>

        </form>

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
