<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/dash.css">
    <script src="../js/dash.js" defer></script>
  </head>
  <body>
    <div id="lpan">
      <h1>TITLE</h1><br>
      <div class="labs">
        <div id="lpan-nav">
          <div class="lpan-b" id="home-b" onclick="home()">
            <p>Home</p>
          </div>
          <div class="lpan-b" id="articles-b" onclick="articles()">
            <p>Artykuły</p>
          </div>
        </div>
      </div>
      <div id="logout-b">
        <p>WYLOGUJ</p>
      </div>
    </div>
    <div id="main">
      <div id="home">
        home
      </div>
      <div id="articles">
        art
      </div>
    </div>
  </body>
</html>
