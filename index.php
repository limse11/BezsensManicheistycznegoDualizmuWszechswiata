<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/login.js" defer></script>
  </head>
  <body>
    <div class="lform">
      <button type="button" class="lform-b" onclick="log()">Logowanie</button>
      <button type="button" class="lform-b" onclick="rej()">Rejestracja</button>
      <div class="labs">
        <div id="log">
          <h1>Logowanie</h1>
          <form action="./forms/login.php" method="post">
            <input type="text" name="login" placeholder="Login" id="login"><br>
            <input type="password" name="pass" placeholder="Hasło" id="pass"><br>
            <input type="submit" value="Zaloguj">
          </form>
        </div>
        <div id="rej">
          <h1>Rejestracja</h1>
          <form action="./forms/signup.php" method="post">
            <input type="text" name="rlogin" placeholder="Login" id="rlogin"><br>
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="password" name="rpass" placeholder="Hasło" id="rpass"><br>
            <input type="submit" value="Zarejestruj">
          </form>
        </div>
      </div>
      <div id="err">
        <p><?php
          session_start();
          if (isset($_SESSION['invalid'])) {
            echo "Niepoprawne dane";
          }
        ?></p>
      </div>
    </div>
  </body>
</html>
