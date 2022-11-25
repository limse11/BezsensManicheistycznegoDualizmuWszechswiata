<?php
  session_start();
  if (isset($_POST['rlogin'])&&isset($_POST['rpass'])&&isset($_POST['email'])&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $login = $_POST['rlogin'];
    $pass = hash("sha256", $_POST['rpass']);
    $email = $_POST['email'];
    $connection = mysqli_connect("localhost","root","","baza");
    $query = "insert into users (login,email,password) values ('{$login}','{$email}','{$pass}');";
    $result = mysqli_query($connection, $query);
    if($result){
        header("Location:../app/dash.php");
    }
    else{
        header("Location:../index.php?error");
    }
    mysqli_close($connection);
  }
?>
