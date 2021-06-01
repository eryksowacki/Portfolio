<?php
  session_start();
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
        <?php
              if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']=true) {
                echo <<< WY
                <a href="./logout.php">
                <div class="actual">
                Wyloguj
              
WY;
              } else {
                echo <<< LO
                <a href="./signing.php">
                <div class="actual">
                Logowanie
              
LO;
              }
          ?>
          </div>
          </a>
        </td>

        </table>

      </div>
    <div class="background">
      <div class="mainpage">
        <h3>Obozy jeździeckie "Stajni" Poznań</h3>

          <br><br>

          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim mauris vel risus fermentum congue. Morbi aliquam turpis dui, semper placerat enim bibendum sit amet. Nullam laoreet at eros at sagittis. Sed luctus semper massa tincidunt lobortis. Aliquam lacinia mauris egestas lectus ultricies, nec lacinia lacus hendrerit. Suspendisse tincidunt ex et condimentum commodo. Morbi placerat, nulla luctus bibendum feugiat, nisi diam volutpat elit, eget porttitor quam tellus vitae tortor. Sed non lacus in sem accumsan commodo ac eu eros. Quisque purus dui, hendrerit nec tincidunt eu, sagittis blandit libero. Nulla facilisi. Praesent mi magna, dignissim et dignissim at, gravida non nulla. Donec congue ultricies nisl, sit amet hendrerit ex semper ac. Nunc et ex ipsum. Etiam tristique elementum nisl sit amet viverra.

          <br><br><br>

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
