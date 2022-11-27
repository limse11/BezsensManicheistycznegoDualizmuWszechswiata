<?php
  session_start();
  if (isset($_POST['login'])&&isset($_POST['pass'])){
    $login = $_POST['login'];
    $pass = hash("sha256", $_POST['pass']);
    $connection = mysqli_connect("localhost","root","","wu_baza");
    $sql="select * from users where login='".$login."' AND password='".$pass."'";
    $result=mysqli_query($connection,$sql);
    if (mysqli_num_rows($result)==1) {
      unset($_SESSION['invalid']);
      header("Location:../app/dash.php");
      $_SESSION['user'] = $login;
    }
    else{
      $_SESSION['invalid'] = 1;
      header("Location:../index.php?error");
    }
  }
?>
