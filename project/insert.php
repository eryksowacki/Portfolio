<?php
  require_once './connect.php';

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $birthdate = $_POST['birthdate'];
  $phonenumber = $_POST['phonenumber'];

  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      echo "<script> alert('Wypełnij wszystkie dane!')</script>";
      echo "<script>history.back()</script>";
      exit();
    }
  }

  if (!$connect->connect_errno) {

    $sql = "INSERT INTO `clients` (`name`, `surname`, `email`, `password`, `birthdate`, `phonenumber`) VALUES ('$name','$surname','$login','$password','$birthdate','$phonenumber')";

    $result = $connect -> query($sql);
  }

  $connect->close();
?>
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
        <br><br><br><br>
          <a href="signing.php">Powrót do logowania</a>
        <br><br><br><br><br><br><br>
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
