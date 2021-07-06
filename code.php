<?php
include('security.php');

if(isset($_POST['login_btn'])){

  $email_login = $_POST['email'];
  $password_login = $_POST['password'];

  $query = "SELECT * FROM admin where email = '$email_login' and password = '$password_login'";
  $query_run = mysqli_query($connect,$query);

  $user_query =  "SELECT username FROM admin where email = '$email_login' and password = '$password_login'";
  echo "$user_query";


  if(mysqli_fetch_array($query_run)){
    $_SESSION['success'] = "Admin Login Completed";
    $_SESSION['username'] = $email_login;
    header('Location: index.php');
  }
  else {
    $_SESSION['status'] = 'Email or Password is Invalid';
    header('Location: login.php');
  }

}

 ?>
