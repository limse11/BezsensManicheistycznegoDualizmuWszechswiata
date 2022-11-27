<?php
  session_start();
  if (isset($_POST['rlogin'])&&isset($_POST['rpass'])&&isset($_POST['email'])&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $login = $_POST['rlogin'];
    $pass = hash("sha256", $_POST['rpass']);
    $email = $_POST['email'];
    $connection = mysqli_connect("127.0.0.1","root","","wu_baza");
    $query = "insert into users (login,email,password) values ('{$login}','{$email}','{$pass}');";
    $result = mysqli_query($connection, $query);
    if($result){
        $_SESSION['user']= $login;
        header("Location:./sucessful.php");
    }
    else{
        header("Location:../index.php?error");
    }
    mysqli_close($connection);
  }
?>
