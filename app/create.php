<?php
  session_start();
  if (isset($_SESSION['user'])&&isset($_GET['title'])&&isset($_GET['cont'])&&$_GET['cont']!=''&&isset($_GET['vis'])) {

    $title = $_GET['title'];
    $cont = $_GET['cont'];
    $user = $_SESSION['user'];
    $vis = $_GET['vis'];
    $connection = mysqli_connect("localhost","root","","wu_baza");
    if (isset($_GET['image'])){
      $image = $_GET['image'];
      $sql = "INSERT INTO articles(title,cont,user,public,image) values('{$title}','{$cont}','{$user}','{$vis}','{$image}')";
    }
    else {
      $sql = "INSERT INTO articles(title,cont,user,public) values('{$title}','{$cont}','{$user}','{$vis}')";
    }
    mysqli_query($connection, $sql);
    header("Location:dash.php");
  }
  else{
    $error = 'adderror';
    header("Location:dash.php?err=1");
  }
?>
