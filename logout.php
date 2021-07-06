<?php
include 'security.php';

if(isset($_POST['logout-button'])){
  session_destroy();
  unset($_POST['username']);
  header("Location: login.php");
}
 ?>
