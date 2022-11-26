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
    ?>
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
              <h1 id="h-tit">Artykuły</h1>
            </div>
          </div>
          <div id="home-art">
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
            <div class="article-m">
              <div class="m-img">
              </div>
              <div class="m-cont">
                <div class="m-head">
                  <div class="m-title"><h1>Lorem Ipsum</div><div class="m-user"><p>user: none</p></div>
                </div>
                <div class="m-desc"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luxuriam non reprehendit, modo sit vacua infinita cupiditate et timore. Ita graviter et severe voluptatem secrevit a bono. Respondeat totidem verbis. Etenim semper illud extra est, quod arte comprehenditur.</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="articles">
        art
      </div>
    </div>
  </body>
</html>
