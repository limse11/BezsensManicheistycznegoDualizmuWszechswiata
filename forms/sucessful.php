<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pomyślnie</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <div class="c-hidden">
      <div class="c-border">

      </div>
      <div class="c-cont">
        <h1>Konto uzytkownika <span><?php
          session_start();
          echo $_SESSION['user'];
        ?></span> utworzone!</h1>
        <img src="../media/svg/check.svg" class="svg">
        <p>Przejdź do <span>PANELU</span></p><br>
        <a href="../app/dash.php"><button>PANEL</button></a>
      </div>
    </div>
  </body>
</html>
