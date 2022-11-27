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
    <?php
      session_start();
      if (!isset($_SESSION['user'])) {
        header("Location:../index.php");
      }
      else {
        $user = $_SESSION['user'];
        $connection = mysqli_connect("localhost","root","","wu_baza");
      }
    ?>
    <?php
      if (isset($_GET['err'])){
        if($_GET['err']==1) {
          echo '<script>window.onload = function(){document.querySelector("#err-cover").style.display = "block";}</script>';
        }
        else{
          exit();
        }
      }
    ?>
    <div id="err-cover">
      <div class="labs">
        <div id="err-b">
          <div class="labs">
            <div id="err-close" onclick="errClose()">
              <div class="labs">
                <img src="../media/svg/close.svg" class="svg" id="close-b">
              </div>
            </div>
            <h1>Błąd!</h1>
            <p>Niepoprawnie wypełnione pola, spróbuj ponownie.</p><br>
            <button onclick="errClose()">OK</button>
          </div>
        </div>
      </div>
    </div>
    <div id="add-cover">
      <div class="labs">
        <div id="add-b">
          <div class="labs">
            <div id="add-close" onclick="addClose()">
              <div class="labs">
                <img src="../media/svg/close.svg" class="svg" id="close-b">
              </div>
            </div>
            <h1>Dodaj artykuł</h1>
            <form action="create.php">
              <input type="text" name="title" placeholder="Tytuł"><br>
              <textarea name="cont" rows="9" cols="80" placeholder="Treść"></textarea><br>
              <p>Widoczność</p><br>
              <input type="radio" name="vis" value="1">Publiczny<br>
              <input type="radio" name="vis" value="0">Prywatny<br>
              <div id="add-image">
                <label for="image">Dodaj zdjęcie artykułu</label><br>
                <input type="url" name="image" placeholder="URL"><br>
              </div>
              <input type="submit" name="create" value="Dodaj" id="create">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="lpan">
      <h1 id="lpan-tit">PANEL</h1><br>
      <div class="labs">
        <div id="lpan-nav">
          <div class="lpan-b" id="home-b" onclick="home()" onmouseover="homeB()">
            <img src="../media/svg/home.svg" class="svg"><p>Home</p>
          </div>
          <div class="lpan-b" id="articles-b" onclick="articles()" onmouseover="articlesB()">
            <img src="../media/svg/article.svg" class="svg"><p>Artykuły</p>
          </div>
        </div>
      </div>
      <form name="logout" action="../forms/logout.php">
      <div id="logout-b" onClick="document.forms['logout'].submit();">
        <img src="../media/svg/logout.svg" class="svg"><p>WYLOGUJ</p>
      </div>
      </form>
    </div>
    <div id="main">
      <div id="home">
        <div class="labs">
          <div id="home-d">
            <div class="labs">
              <div id="h-bar">
                <div id="clock-b">
                  <p id="clock"></p>
                  <p id="date"></p>
                </div>
                <div id="welcome">
                  <div class="labs">
                    <h1>Witaj <span id="username"><?php
                    echo $_SESSION['user'];
                    ?></span></h1>
                  </div>
                </div>
              </div>
              <h1 id="h-tit">Publiczne Artykuły</h1>
            </div>
          </div>
          <div id="home-art">
            <?php
              $sql = "SELECT * FROM articles WHERE public='1'";
              $query = mysqli_query($connection, $sql);
              foreach ($query as $q) {
            ?>
            <div class="article-m art-d">
              <div class="m-img" <?php
                if(!empty($q['image'])){
                  $img = $q['image'];
                  echo <<<END
                    style="background-image: url('{$img}') !important;'"
                  END;
                }
              ?>>
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1><?php echo $q['title'];?></div><div class="m-user"><p>user: <?php echo $q['user'];?></p></div>
                </div>
                <div class="m-desc"><p><?php echo $q['cont'];?></p></div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
      <div id="articles">
        <h1 id="my-tit">Moje Artykuły</h1>
        <div class="article-m art-d" id="art-add" onclick="addOpen();">
          <img src="../media/svg/add.svg" class="svg">
        </div>
        <?php
          $sql = "SELECT * FROM articles WHERE user='{$user}'";
          $query = mysqli_query($connection, $sql);
          foreach ($query as $q) {
        ?>
        <div class="article-m art-d">
          <div class="m-img" <?php
            if(!empty($q['image'])){
              $img = $q['image'];
              echo <<<END
                style="background-image: url('{$img}') !important;'"
              END;
            }
          ?>>
          </div>
          <div class="m-cont">
            <div class="m-head">
              <div class="m-title"><h1><?php echo $q['title'];?></div><div class="m-user"><p>user: <?php echo $q['user'];?></p></div>
            </div>
            <div class="m-desc"><p><?php echo $q['cont'];?></p></div>
          </div>
        </div>
      <?php }?>
      </div>
    </div>
  </body>
</html>
