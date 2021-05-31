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
        <a href="./actual.php">
          <div class="actual">
           Aktualności
          </div>
        </a>
      </td>

      <td>
        <a href="./offer.php">
          <div class="offer">
             Oferta
          </div>
        </a>
      </td>

      <td>
        <a href="./kadra.php">
          <div class="kadra">
             Kadra
          </div>
        </a>
      </td>

      <td>
        <a href="./camps.php">
          <div class="camps">
            Obozy jeździeckie
          </div>
        </a>
      </td>

      <td>
        <a href="./gallery.php">
          <div class="gallery">
             Galeria
          </div>
        </a>
      </td>

      <td>
        <a href="./achievements.php">
          <div class="achievements">
             Osiągnięcia
          </div>
        </a>
      </td>

      <td>
        <a href="./contact.php">
          <div class="contact">
             Kontakt
          </div>
        </a>
      </td>
      </table>

    </div>
    <div class="background">
      <div class="mainpage">
          <h3>Wybór terminu</h3>

          Wybrana data:

          <br>

          <?php
            $trainingdate = $_POST['date'];
            echo $trainingdate;
          ?>

          <br>

          Wybór godziny treningu:

          <br><br><br>

          <form action="stepthird.php" method="POST">
            <input type="time" name="time">

            <br><br><br>
            
            <input type="submit" name="submit" value="Wybór intruktora">
          </form>

          <a href="main.php">
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
