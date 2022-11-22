<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/master.css">
    <script src="./js/login.js" defer></script>
  </head>
  <body>
    <?php
      $host = "127.0.0.1";
      $user = "root";
      $password = "";
      $db = "baza";
    ?>
    <div class="lform">
      <button type="button" class="lform-b" onclick="log()">Logowanie</button>
      <button type="button" class="lform-b" onclick="rej()">Rejestracja</button>
      <div class="labs">
        <div id="log">
          <h1>Logowanie</h1>
          <input type="text" name="login" placeholder="Login" id="login"><br>
          <input type="password" name="pass" placeholder="Hasło" id="pass"><br>
          <input type="submit" value="Zaloguj">
        </div>
        <div id="rej">
          <h1>Rejestracja</h1>
          <input type="text" name="rlogin" placeholder="Login" id="rlogin"><br>
          <input type="email" name="email" placeholder="E-mail"><br>
          <input type="password" name="rpass" placeholder="Hasło" id="rpass"><br>
          <input type="submit" value="Zarejestruj">
        </div>
      </div>
    </div>
  </body>
</html>
